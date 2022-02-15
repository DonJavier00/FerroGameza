<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use PhpParser\Node\Scalar\String_;
use Carbon\Carbon;
use Exception;
use JsonSerializable;

class clasificacion extends AbstractDBConnection implements \App\Interfaces\Model
{

    private ?int $id;
    private String $nombre;

    /*relacio*/
    private ?array $ProductoClasificacion;

    /**
     * @param int|null $id
     * @param String $nombre
     */
    public function __construct(?int $id, string $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
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
     * @return clasificacion
     */
    public function setId(?int $id): clasificacion
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return String
     */
    public function getNombre(): string
    {
        return ucwords($this->nombre);
    }

    /**
     * @param String $nombre
     * @return clasificacion
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = trim(mb_strtolower($nombre, 'UTF-8'));
    }

    /**
     * @return array
     */
    public function getProductoClasificacion(): ?array
    {
        $this-> ProductoClasificacion = clasificacion::search(
            "SELECT * FROM FerroGameza.clasificacion WHERE departamento_id = ".$this->id
        );
        return $this-> ProductoClasificacion ?? null;
    }





    protected function save(string $query): ?bool
    {

        $arrData = [
            ':id' =>    $this->getId(),
            ':nombre' =>   $this->getNombre(),


        ];
        $this->Connect();
        $result = $this->insertRow($query, $arrData);
        $this->Disconnect();
        return $result;
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
        try {
            $arrClasificacion = array();
            $tmp = new clasificacion();
            $tmp->Connect();
            $getrows = $tmp->getRows($query);
            $tmp->Disconnect();

            foreach ($getrows as $valor) {
                $Clasificacion = new clasificacion($valor);
                array_push($arrClasificacion, $Clasificacion);
                unset($Clasificacion);
            }
            return $arrClasificacion;
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception',$e, 'error');
        }
        return null;
    }

    static function searchForId(int $id): ?object
    {
        try {
            if ($id > 0) {
                $Clasificacion = new clasificacion();
                $Clasificacion->Connect();
                $getrow = $Clasificacion->getRow("SELECT * FROM FerroGameza.clasificacion WHERE id =?", array($id));
                $Clasificacion->Disconnect();
                return ($getrow) ? new clasificacion($getrow) : null;
            }else{
                throw new Exception('Id de clasificacion Invalido');
            }
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception',$e, 'error');
        }
        return null;
    }

    public static function getAll() : ?array
    {
        return clasificacion::search("SELECT * FROM FerroGameza.clasificacion");
    }

    public function __toString() : string
    {
        return "Nombre: $this->nombre, Descripción: $this->descripcion, Estado: $this->estado";
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'nombre' => $this->getNombre(),

        ];
    }

}