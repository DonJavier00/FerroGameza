<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use Carbon\Carbon;
use Exception;
use JsonSerializable;
class Persona extends AbstractDBConnection implements \App\Interfaces\Model
{
    private ?int $id;
    private string $tipodocumento;
    private int $documento;
    private string $correo;
    private string $nombre;
    private string $apellido;
    private string $telefono;
    private string $contrasena;
    private string $rol;
    private string $estado;

    //Relaciones
    private ?array $FacturaCompraPersona;
    private ?array $FacturaVentaPersona;

    /**
     * @param int|null $id
     * @param string $tipodocumento
     * @param int $documento
     * @param string $correo
     * @param string $nombre
     * @param string $apellido
     * @param string $telefono
     * @param string $contrasena
     * @param string $rol
     * @param string $estado
     */
    public function __construct(array $persona = [])
    {
        parent::__construct();
        $this->setId($persona ['id'] ?? null);
        $this->setTipodocumento($persona ['tipodocumento'] ?? '');
        $this->setDocumento($persona ['documento'] ?? '');
        $this->setCorreo($persona ['correo'] ?? '');
        $this->setNombre($persona ['nombre'] ?? '');
        $this->setApellido($persona ['apellido'] ?? '');
        $this->setTelefono($persona ['telefono'] ?? '');
        $this->setContrasena($persona ['contraseña'] ?? '');
        $this->setRol($persona ['rol'] ?? '');
        $this->setEstado($persona ['estado'] ?? '');
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
    public function getTipodocumento(): string
    {
        return $this->tipodocumento;
    }

    /**
     * @param string $tipodocumento
     */
    public function setTipodocumento(string $tipodocumento): void
    {
        $this->tipodocumento = $tipodocumento;
    }

    /**
     * @return int
     */
    public function getDocumento(): int
    {
        return $this->documento;
    }

    /**
     * @param int $documento
     */
    public function setDocumento(int $documento): void
    {
        $this->documento = $documento;
    }

    /**
     * @return string
     */
    public function getCorreo(): string
    {
        return $this->correo;
    }

    /**
     * @param string $correo
     */
    public function setCorreo(string $correo): void
    {
        $this->correo = $correo;
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
    public function getApellido(): string
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     */
    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    /**
     * @return string
     */
    public function getTelefono(): string
    {
        return $this->telefono;
    }

    /**
     * @param string $telefono
     */
    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return string
     */
    public function getContrasena(): string
    {
        return $this->contrasena;
    }

    /**
     * @param string $contrasena
     */
    public function setContrasena(string $contrasena): void
    {
        $this->contrasena = $contrasena;
    }

    /**
     * @return string
     */
    public function getRol(): string
    {
        return $this->rol;
    }

    /**
     * @param string $rol
     */
    public function setRol(string $rol): void
    {
        $this->rol = $rol;
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
     * @return array|null
     */
    public function getFacturaCompraPersona(): ?array
    {
        return $this->FacturaCompraPersona;
    }

    /**
     * @param array|null $FacturaCompraPersona
     */
    public function setFacturaCompraPersona(?array $FacturaCompraPersona): void
    {
        $this->FacturaCompraPersona = $FacturaCompraPersona;
    }

    /**
     * @return array|null
     */
    public function getFacturaVentaPersona(): ?array
    {
        return $this->FacturaVentaPersona;
    }

    /**
     * @param array|null $FacturaVentaPersona
     */
    public function setFacturaVentaPersona(?array $FacturaVentaPersona): void
    {
        $this->FacturaVentaPersona = $FacturaVentaPersona;
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
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}