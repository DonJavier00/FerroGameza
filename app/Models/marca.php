<?php

namespace App\Models;

use JetBrains\PhpStorm\Internal\TentativeType;
use PhpParser\Node\Scalar\String_;
use Carbon\Carbon;
use Exception;
use JsonSerializable;
class marca extends AbstractDBConnection implements \App\Interfaces\Model
{
private  ?int $id;
private string $nombre;

/*Relaciones*/
private ?array$productomarca;

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
        if(!empty($this->productomarca_id)){
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