<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use PhpParser\Node\Scalar\String_;
use Carbon\Carbon;
use Exception;
use JsonSerializable;

class facturaventa extends AbstractDBConnection implements \App\Interfaces\Model
{
    private ?int $id;
    private Carbon $fecha;
    private string $monto;
    private ?int $cliente_id;
    private string $estado;

    /* Relaciones */

    Private Persona $PersonaFacturaVenta;
    Private ?array $DetalleVentaFacturaVenta;





    /**
     * factura venta contructor. Recibe un array asociativo
     * @param array $facturaventa
     */
    public function __construct(array $facturaventa = [])
    {
        parent::__contruct();
        $this->setId($facturaventa ['id'] ?? null);
        $this->setFecha(!empty($facturaventa['fecha']) ?
            Carbon::parse($facturaventa['fecha']) : new Carbon());
        $this->setMonto($facturaventa ['monto']?? '');
        $this->setClienteId($facturaventa ['cliente_id'] ?? null);
        $this->setestado($facturaventa ['estado'] ?? '');


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
     * @return Carbon
     */
    public function getFecha(): Carbon
    {
        return $this->fecha->locale('es');
    }

    /**
     * @param Carbon $fecha
     */
    public function setFecha(Carbon $fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return string
     */
    public function getMonto(): string
    {
        return $this->monto;
    }

    /**
     * @param string $monto
     */
    public function setMonto(string $monto): void
    {
        $this->monto = $monto;
    }

    /**
     * @return int|null
     */
    public function getClienteId(): ?int
    {
        return $this->cliente_id;
    }

    /**
     * @param int|null $cliente_id
     */
    public function setClienteId(?int $cliente_id): void
    {
        $this->cliente_id = $cliente_id;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     */
    public function setEstado(string $estado): void
    {
        $this->estado = $estado;
    }


    /**
     * @return int|null
     */

    /* ----------------Relaciones ----------*/

    /**
     * @return Persona
     */
    public function getPersonaFacturaVenta():Persona
    {
        if(!empty($this->cliente_id)){
            $this->cliente = Persona::searchForId($this->cliente_id) ?? new cliente();
            return $this->cliente;
        }
       //return Null;
    }

    /**
     * @param Persona $PersonaFacturaVenta
     */

    public function setPersonaFacturaVenta(Persona $PersonaFacturaVenta): void
    {

    }

    /**
     * @return array|null
     */
    public function getDetalleVentaFacturaVenta(): ?array
    {
        $this->DetalleVentaFacturaVenta = detalleventa::search('SELECT * FROM ferreteria.detalle_venta where facturaventa_id = '.$this->id);
        return $this->DetalleVentaFacturaVenta;
    }

    /**
     * @param array|null $DetalleVentaFacturaVenta
     */
    public function setDetalleVentaFacturaVenta(?array $DetalleVentaFacturaVenta): void
    {
        $this->DetalleVentaFacturaVenta = $DetalleVentaFacturaVenta;
    }





    protected function save(string $query): ?bool

    {
        $arrData = [
            ':id' =>    $this->getId(),
            ':fecha' =>  $this->getFecha()->toDateTimeString(), //YYYY-MM-DD HH:MM:SS
            ':monto' =>   $this->getMonto(),
            ':cliente' =>   $this->getCliente_id(),
            ':estado' => $this->getEstado(),

        ];
        $this->Connect();
        $result = $this->insertRow($query, $arrData);
        $this->Disconnect();
        return $result;
    }

    function insert(): ?bool
    {
        $query = "INSERT INTO ferreteria.facturaventa VALUES (:id,:fecha,:monto,:cliente_id,:estado)";
        return $this->save($query);
    }

    function update(): ?bool
    {
        $query = "UPDATE ferreteria.facturaventa SET 
            fecha = :fecha,
            monto = :monto,
            cliente_id = :cliente_id,
            estado = :estado, WHERE id = :id";
           return $this->save($query);
    }

    function deleted(): ?bool
    {
        $this->setEstado("inactivo"); //Cambia el estado del Usuario
        return $this->update();                    //Guarda los cambios..
    }

    static function search($query): ?array
    {
        try {
            $arrfacturaventa = array();
            $tmp = new facturaventa();
            $tmp->Connect();
            $getrows = $tmp->getRows($query);
            $tmp->Disconnect();

            foreach ($getrows as $valor) {
                $arrfacturaventa = new facturaventa($valor);
                array_push($arrfacturaventa, $arrfacturaventa);
                unset($arrfacturaventa);
            }
            return $arrfacturaventa;
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception',$e, 'error');
        }
        return NULL;
    }

    static function searchForId(int $id): ?object
    {
        try {
            if ($id > 0) {
                $facturaventa = new facturaventa();
                $facturaventa->Connect();
                $getrow = $facturaventa->getRow("SELECT * FROM ferreteria.facturaventa WHERE id =?", array($id));
                $facturaventa->Disconnect();
                return ($getrow) ? new facturaventa($getrow) : null;
            }else{
                throw new Exception('Id de factura venta Invalido');
            }
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception',$e, 'error');
        }
        return NULL;
    }

    static function getAll(): ?array
    {
        return facturaventa::search(query: "SELECT * FROM ferreteria.facturaventa");
    }

    /**
     * @return string

    public function __toString() : string
    {
        return "Numero Serie: $this->numero_serie,
         Cliente: ".$this->getCliente()->nombresCompletos().",
         Empleado: ".$this->getEmpleado()->nombresCompletos().",
         Fecha Venta: $this->fecha_venta->toDateTimeString(),
          Monto: $this->monto, Estado: $this->estado";
    }  */
    /**
     * @inheritDoc
     */
    public function jsonSerialize(): mixed
    {
        return [
            'fecha' => $this->getFecha()->toDateTimeString(),
            'empleado' => $this->getEmpleado()->jsonSerialize(),
            'monto' => $this->getMonto(),
            'cliente_id' => $this->getClienteId(),
            'estado' => $this->getEstado(),

        ];
    }
}