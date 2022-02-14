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
       return null;
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
        // TODO: Implement save() method.
    }

    function insert(): ?bool
    {
        // TODO: Implement insert() method.
    }

    function update(): ?bool
    {
        // TODO: Implement update() method.
    }

    function deleted(): ?bool
    {
        // TODO: Implement deleted() method.
    }

    static function search($query): ?array
    {
        // TODO: Implement search() method.
    }

    static function searchForId(int $id): ?object
    {
        // TODO: Implement searchForId() method.
    }

    static function getAll(): ?array
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
    }
}