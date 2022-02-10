<?php

namespace App\Models;

use Carbon\Carbon;
use Exception;
use JsonSerializable;


class facturaventa extends AbstractDBConnection implements \App\Interfaces\Model
{
 private ?int $id;
 private Carbon $created_at;
 private string $monto;

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