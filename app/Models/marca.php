<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use PhpParser\Node\Scalar\String_;
use Carbon\Carbon;
use Exception;
use JsonSerializable;
class marca extends AbstractDBConnection implements \App\Interfaces\Model
{
    private ?int $id;
    private string $nombre;

    /*Relaciones*/
    private ?array $productomarca;

    /**
     * @param int|null $id
     * @param string $nombre
     */
    public function __construct(array $marca = [])
    {
        parent::__contruct();
        $this->setId($marca ['id'] ?? null);
        $this->setnombre($marca ['nombre'] ?? '');
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
    /*relaciones*/


    /**
     * @return array|null
     */
    public function getProductomarca(): ?array
    {
        if (!empty($this->productomarca_id)) {
            $this->productomarca = Persona::searchForId($this->cliente_id) ?? new cliente();
            return $this->productomarca;
        }
        //return Null;

        return $this->productomarca;
    }

    /**
     * @param array|null $productomarca
     */
    public function setProductomarca(?array $productomarca): void
    {
        $this->productomarca = $productomarca;
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
        $query = "INSERT INTO FerroGameza.marca VALUES (:id,:nombre)";
        return $this->save($query);
    }

    function update(): ?bool
    {
        $query = "UPDATE FerroGamez.marca SET 
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
            $arrmarca = array();
            $tmp = new marca();
            $tmp->Connect();
            $getrows = $tmp->getRows($query);
            $tmp->Disconnect();

            foreach ($getrows as $valor) {
                $marca = new marca($valor);
                array_push($arrmarca, $marca);
                unset($marca);
            }
            return $arrmarca;
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e, 'error');
        }
        return null;
    }

    static function searchForId(int $id): ?object
    {
        try {
            if ($id > 0) {
                $marca = new marca();
                $marca->Connect();
                $getrow = $marca->getRow("SELECT * FROM clasificacion WHERE id =?", array($id));
                $marca->Disconnect();
                return ($getrow) ? new clasificacion($getrow) : null;
            } else {
                throw new Exception('Id de marca Invalido');
            }
        } catch (Exception $e) {
            GeneralFunctions::logFile('Exception', $e);
        }
return null;
    }

    static function getAll(): ?array
    {
        return Productos::search("SELECT * FROM FerroGamez.marca");
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