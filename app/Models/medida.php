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
        return null;
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
        $arrData = [
            ':id' => $this->getId(),
            ':nombre' => $this->getNombre(),
            ':medida' => $this->getMedida()];

        $this->Connect();
        $result = $this->insertRow($query, $arrData);
        $this->Disconnect();
        return $result;
    }

    function insert(): ?bool
    {
        $query = "INSERT INTO ferreteria.medida VALUES (:id,:nombre,:medida)";
        return $this->save($query);
    }

    function update(): ?bool
    {
        $query = "UPDATE ferreteria.medida SET 
            nombre = :nombre, medida = :medida, 
            WHERE id = :id";
        return $this->save($query);
    }

    function deleted(): ?bool
    {
        return null;
    }

    static function search($query): ?array
    {
        try {
            $arrmedida = array();
            $tmp = new medida();
            $tmp->Connect();
            $getrows = $tmp->getRows($query);
            $tmp->Disconnect();

            foreach ($getrows as $valor) {
                $medida = new medida($valor);
                array_push($arrmedida, $medida);
                unset($medida);
            }
            return $arrmedida;
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e, 'error');
        }
        return null;
    }

    static function searchForId(int $id): ?object
    {
        try {
            if ($id > 0) {
                $Medida = new medida();
                $Medida->Connect();
                $getrow = $Medida->getRow("SELECT * FROM medida WHERE id =?", array($id));
                $Medida->Disconnect();
                return ($getrow) ? new medida($getrow) : null;
            } else {
                throw new Exception('Id de medida Invalido');
            }
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e);
        }
        return null;
        }



    static function getAll(): ?array
    {
        return medida::search("SELECT * FROM ferreteria.medida");
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'nombre' => $this->getNombre(),
            'medida' => $this->getMedida(),
        ];
    }
}
