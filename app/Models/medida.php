<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use PhpParser\Node\Scalar\String_;
use Carbon\Carbon;
use Exception;
use JsonSerializable;

class medida extends AbstractDBConnection implements \App\Interfaces\Model
{
    private ?int $id;
    private string $nombre;
    private string $tipoMedida;
    private string $unidadMedida;

    /* Relaciones */

    private ?array $ProductoMedida;
    private ?array $DetalleVentaMedida;

    /**
     * @param int|null $id
     * @param string $nombre
     * @param string $tipoMedida
     * @param string $unidadMedida
     */
    public function __construct(array $medida = [])
    {
        parent::__contruct();

        $this->setId($medida ['id'] ?? null);
        $this->setNombre($medida ['nombre'] ?? '');
        $this->setTipoMedida($medida ['tipoMedida'] ?? '');
        $this->setUnidadMedida($medida ['unidadMedida'] ?? '');

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
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getTipoMedida(): string
    {
        return $this->tipoMedida;
    }

    /**
     * @param string $tipoMedida
     */
    public function setTipoMedida(string $tipoMedida): void
    {
        $this->tipoMedida = $tipoMedida;
    }

    /**
     * @return string
     */
    public function getUnidadMedida(): string
    {
        return $this->unidadMedida;
    }

    /**
     * @param string $unidadMedida
     */
    public function setUnidadMedida(string $unidadMedida): void
    {
        $this->unidadMedida = $unidadMedida;
    }

    /* Relaciones */



    /**
     * @return array|null
     */
    public function getProductoMedida(): ?array
    {
        if(!empty($this->producto_id)){
            $this->ProductoMedida = Persona::searchForId($this->cliente_id) ?? new cliente();
            return $this->cliente;
        }
        //return Null;
    }
    /**
     * @param array|null $ProductoMedida
     */
    public function setProductoMedida(?array $ProductoMedida): void
    {
        $this->ProductoMedida = $ProductoMedida;
    }

    /**
     * @return array|null
     */
    public function getDetalleVentaMedida(): ?array
    {
        return $this->DetalleVentaMedida;
    }

    /**
     * @param array|null $DetalleVentaMedida
     */
    public function setDetalleVentaMedida(?array $DetalleVentaMedida): void
    {
        $this->DetalleVentaMedida = $DetalleVentaMedida;
    }







    protected function save(string $query): ?bool
    {
        return null;
    }

    function insert(): ?bool
    {
        return null;
    }

    function update(): ?bool
    {
        return null;
    }

    function deleted(): ?bool
    {
        return null;
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
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}