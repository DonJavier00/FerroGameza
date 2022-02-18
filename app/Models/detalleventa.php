<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use PhpParser\Node\Scalar\String_;
use Carbon\Carbon;
use Exception;
use JsonSerializable;


class detalleventa extends AbstractDBConnection implements \App\Interfaces\Model
{
    private ?int $id;
    private float $cantidad;
    private float $valor;
    private int  $facturaventa_id;
    private int $medida_id;
    private int $producto_id;

    /* ------------Relaciones ------------*/
    Private facturaventa $FacturaVenta;
    private producto $ProductoVenta;
    private ?medida $Medida;


    public function __construct(array $detalleventa = [])
    {
        parent::__contruct();
        $this->setId($detalleventa ['id'] ?? null);
        $this->setCantidad($detalleventa ['cantidad']?? 0.0);
        $this->setValor($detalleventa ['valor']?? 0.0);
        $this->setFacturaVentaId($detalleventa['facturaventa_id'] ?? null);
        $this->setMedidaId($detalleventa['medida_id'] ?? null);
        $this->setProductoId($detalleventa['producto_id'] ?? null);

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
    public function getFacturaventaId(): int
    {
        return $this->facturaventa_id;
    }

    /**
     * @param int $facturaventa_id
     */
    public function setFacturaventaId(int $facturaventa_id): void
    {
        $this->facturaventa_id = $facturaventa_id;
    }

    /**
     * @return int
     */
    public function getMedidaId(): int
    {
        return $this->medida_id;
    }

    /**
     * @param int $medida_id
     */
    public function setMedidaId(int $medida_id): void
    {
        $this->medida_id = $medida_id;
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

    /* ----------------Relaciones ----------*/


    /**
     * @return facturaventa
     */
    public function getFacturaVenta(): facturaventa
    {
        if(!empty($this->facturaventa_id)){
            $this->facturaventa = facturaventa::searchForId($this->facturaventa_id) ?? new facturaventa();

        }
        return $this->facturaventa;
    }


    /**
     * @param facturaventa $FacturaVenta
     */
    public function setFacturaVenta(facturaventa $FacturaVenta): void
    {
        $this->FacturaVenta = $FacturaVenta;
    }

    /**
     * @return producto
     */
    public function getProductoVenta(): producto
    {
        if (!empty($this->productoventa_id)) {
            $this->productoventa = productoventa::searchForId($this->productoventa_id) ?? new Producto();
        }
        return $this->productoventa;
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
    public function getMedida(): ?medida
    {
        if (!empty($this->medida_id)) {
            $this->medida = medida::searchForId($this->medida_id) ?? new medida();

        }
        return $this->medida;
    }

    /**
     * @param medida|null $Medida
     */
    public function setMedida(?medida $Medida): void
    {
        $this->Medida = $Medida;
    }



    protected function save(string $query, string $type = 'insert'): ?bool
    {
        if ($type == 'deleted') {
            $arrData = [':id' => $this->getId()];
        } else {
            $arrData = [
                ':id' => $this->getId(),
                ':cantidad' => $this->getCantidad(),
                ':valor' => $this->getValor(),
                ':facturaventa_id' => $this->getFacturaVenta(),
                ':medida_id' => $this->getMedida(),
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
            $query = "INSERT INTO ferreteria.detalleventa VALUES (:id,:cantidad,:valor,:facturaventa_id,:medida_id,:producto_id)";
            if($this->save($query)){
                return $this->getProductoVenta()->substractStock($this->getCantidad());
            }
            return false;
        }


    function update(): ?bool
    {
        $query = "UPDATE ferreteria.detalleventa SET 
            FacturaVenta_id = :FacturaVenta, producto_id = :producto_id, cantidad = :cantidad, 
            precio_venta = :precio_venta, created_at = :created_at WHERE id = :id";
        return $this->save($query);
    }

    function deleted(): ?bool
    {
        $query = "DELETE FROM detalleventa WHERE id = :id";
        return $this->save($query, 'deleted');
    }

    static function search($query): ?array
    {
        try {
            $arrDetalleVenta = array();
            $tmp = new detalleventa();
            $tmp->Connect();
            $getrows = $tmp->getRows($query);
            $tmp->Disconnect();

            foreach ($getrows as $valor) {
                $DetalleVenta = new detalleventa($valor);
                array_push($arrDetalleVenta, $DetalleVenta);
                unset($DetalleVenta);
            }
            return $arrDetalleVenta;
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception',$e, 'error');
        }
        return NULL;
    }

    static function searchForId(int $id): ?object
    {
        try {
            if ($id > 0) {
                $DetalleVenta = new detalleventa();
                $DetalleVenta->Connect();
                $getrow = $DetalleVenta->getRow("SELECT * FROM ferreteria.detalleventa WHERE id = ?", array($id));
                $DetalleVenta->Disconnect();
                return ($getrow) ? new detalleventa($getrow) : null;
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
        return detalleventa::search("SELECT * FROM ferreteria.detalleventa");
    }

    /**
     * @inheritDoc
     */
  //  public static function productoEnFactura($venta_id,$producto_id): bool
  //  {
      //  $result = DetalleVentas::search("SELECT id FROM weber.detalle_ventas where venta_id = '" . $venta_id. "' and producto_id = '" . $producto_id. "'");
      //  if (count($result) > 0) {
      //      return true;
       // } else {
      //      return false;
      //  }
   // }
    public function jsonSerialize(): mixed
    {
        return [
            'cantidad' => $this->getCantidad(),
            'valor' => $this->getValor(),
            'facturaventa_id' => $this->getFacturaventaId()->jsonSerialize(),
            'medida_id' => $this->getPrecioVenta()->jsonSerialize(),
            'producto_id' => $this->getCreatedAt()->jsonSerialize(),
        ];
    }

}