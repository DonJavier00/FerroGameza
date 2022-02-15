<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use PhpParser\Node\Scalar\String_;
use Carbon\Carbon;
use Exception;
use JsonSerializable;

class material extends AbstractDBConnection implements \App\Interfaces\Model
{
    private ?int $id;
    private string $nombre;

    /*Relaciones*/

    private ?array $productomaterial;

    /**
     * @param int|null $id
     * @param string $nombre
     */
    public function __construct(array $material = [])
    {
        parent::__contruct();
        $this->setId($material ['id'] ?? null);
        $this->setnombre($material ['nombre'] ?? '');
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
     * @return array|null
     */
    public function getProductomaterial(): ?array
    {
        if (!empty($this->productomaterial_id)) {
            $this->productomaterial = Persona::searchForId($this->cliente_id) ?? new cliente();
        return $this->productomaterial;
    }

    //return Null;

         return $this->productomaterial;
    }

    /**
     * @param array|null $productomaterial
     */
    public function setProductomaterial(?array $productomaterial): void
    {
        $this->productomaterial = $productomaterial;
    }


    protected function save(string $query): ?bool
    {
        $arrData = [
            ':id' => $this->getId(),
            ':nombre' => $this->getNombre()];

        $this->Connect();
        $result = $this->insertRow($query, $arrData);
        $this->Disconnect();
        return $result;
    }


    function insert(): ?bool
    {
        $query = "INSERT INTO FerroGameza.material VALUES (:id,:nombre)";
        return $this->save($query);
    }

    function update(): ?bool
    {
        $query = "UPDATE FerroGameza.material SET 
            nombre = :nombre,
            WHERE id = :id";
        return $this->save($query);
    }

    function deleted(): ?bool
    {
        // TODO: Implement deleted() method.
    }

    static function search($query): ?array
    {
        try {
            $arrmaterial = array();
            $tmp = new material();
            $tmp->Connect();
            $getrows = $tmp->getRows($query);
            $tmp->Disconnect();

            foreach ($getrows as $valor) {
                $material = new material($valor);
                array_push($arrmaterial, $material);
                unset($material);
            }
            return $arrmaterial;
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e, 'error');
        }
        return null;
    }

    static function searchForId(int $id): ?object
    {
        try {
            if ($id > 0) {
                $material = new marca();
                $material->Connect();
                $getrow = $material->getRow("SELECT * FROM clasificacion WHERE id =?", array($id));
                $marca->Disconnect();
                return ($getrow) ? new clasificacion($getrow) : null;
            } else {
                throw new Exception('Id de material Invalido');
            }
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e);
        }
        return null;
    }

    static function getAll(): ?array
    {
        return Productos::search("SELECT * FROM FerroGamez.material");
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'nombre' => $this->getNombre(),

        ];
    }
}