<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use PhpParser\Node\Scalar\String_;
use Carbon\Carbon;
use Exception;
use JsonSerializable;

class detallecompra extends AbstractDBConnection implements \App\Interfaces\Model
{
    private ?int $id;
    private float $cantidad;
    private float $valor;
    private int  $compra_id;
    private int $producto_id;


    /* ------------Relaciones ------------*/
    private producto $ProductoVenta;
    private ?medida $Facturacompra;

    /**
     * @param int|null $id
     * @param float $cantidad
     * @param float $valor
     * @param int $compra_id
     * @param int $producto_id
     */
    public function __construct(array $detallecompra = [])
    {

        parent::__contruct();
        $this->setId($detallecompra ['id'] ?? null);
        $this->setCantidad($detallecompra ['cantidad']?? 0.0);
        $this->setValor($detallecompra ['valor']?? 0.0);
        $this->setcompraId($detallecompra['compra_id'] ?? null);
        $this->setProductoId($detallecompra['producto_id'] ?? null);

    }
    public function __destruct()
    {
        parent::__destruct();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getCantidad(): float
    {
        return $this->cantidad;
    }

    /**
     * @param float $cantidad
     */
    public function setCantidad(float $cantidad): void
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @param float $valor
     */
    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    /**
     * @return int
     */
    public function getCompraId(): int
    {
        return $this->compra_id;
    }

    /**
     * @param int $compra_id
     */
    public function setCompraId(int $compra_id): void
    {
        $this->compra_id = $compra_id;
    }

    /**
     * @return int
     */
    public function getProductoId(): int
    {
        return $this->producto_id;
    }

    /**
     * @param int $producto_id
     */
    public function setProductoId(int $producto_id): void
    {
        $this->producto_id = $producto_id;
    }

    /**
     * @return producto
     */
    public function getProductoVenta(): producto
    {
        return $this->ProductoVenta;
    }

    /**
     * @param producto $ProductoVenta
     */
    public function setProductoVenta(producto $ProductoVenta): void
    {
        $this->ProductoVenta = $ProductoVenta;
    }

    /**
     * @return medida|null
     */
    public function getFacturacompra(): ?medida
    {
        return $this->Facturacompra;
    }

    /**
     * @param medida|null $Facturacompra
     */
    public function setFacturacompra(?medida $Facturacompra): void
    {
        $this->Facturacompra = $Facturacompra;
    }



    protected function save(string $query): ?bool
    {
        if ($type == 'deleted') {
            $arrData = [':id' => $this->getId()];
        } else {
            $arrData = [
                ':id' => $this->getId(),
                ':cantidad' => $this->getCantidad(),
                ':valor' => $this->getValor(),
                ':compra_id' => $this->getCompraId(),
                ':producto_id' => $this->getProductoId(),
            ];
        }
        $this->Connect();
        $result = $this->insertRow($query, $arrData);
        $this->Disconnect();
        return $result;
    }

    function insert(): ?bool
    {
        {
            $query = "INSERT INTO ferreteria.detallecompra VALUES (:id,:cantidad,:valor,:compra_id,:producto_id)";
            if($this->save($query)){
                return $this->getProductoVenta()->substractStock($this->getCantidad());
            }
            return false;
        }
    }

    function update(): ?bool
    {
        //falta No entendi
    }

    function deleted(): ?bool
    {
        $query = "DELETE FROM detallecompra WHERE id = :id";
        return $this->save($query, 'deleted');
    }

    static function search($query): ?array
    {
        try {
            $arrdetallecompra = array();
            $tmp = new detallecompra();
            $tmp->Connect();
            $getrows = $tmp->getRows($query);
            $tmp->Disconnect();

            foreach ($getrows as $valor) {
                $detallecompra = new detallecompra($valor);
                array_push($arrdetallecompra, $detallecompra);
                unset($detallecompra);
            }
            return $arrdetallecompra;
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception',$e, 'error');
        }
        return NULL;
    }

    static function searchForId(int $id): ?object
    {
        try {
            if ($id > 0) {
                $detallecompra = new detalleventa();
                $detallecompra->Connect();
                $getrow = $detallecompra->getRow("SELECT * FROM ferreteria.detallecompra WHERE id = ?", array($id));
                $detallecompra->Disconnect();
                return ($getrow) ? new detallecompra($getrow) : null;
            }else{
                throw new Exception('Id de detalle venta Invalido');
            }
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception',$e, 'error');
        }
        return NULL;
    }

    static function getAll(): ?array
    {
        return detallecompra::search("SELECT * FROM ferreteria.detallecompra");
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'cantidad' => $this->getCantidad(),
            'valor' => $this->getValor(),
            'facturaventa_id' => $this->getFacturaventaId()->jsonSerialize(),
            'compra_id' => $this->getCompraId()->jsonSerialize(),
            'producto_id' => $this->getProductoId()->jsonSerialize(),
        ];
    }

}
