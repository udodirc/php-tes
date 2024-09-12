<?php

namespace app\models;

use core\Model;

class ProductModel extends Model
{
    private string $tableName = 'products';

    public function products(): array|false
    {
        $query = "select *
        from `{$this->tableName}`;";

        return $this->fetch($query);
    }

    public function store(array $data): bool
    {
        return $this->save($this->tableName, $data);
    }
}