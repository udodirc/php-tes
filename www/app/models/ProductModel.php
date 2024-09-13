<?php

namespace app\models;

use core\Model;

class ProductModel extends Model
{
    public string $tableName = 'products';

    public function products(): array|false
    {
        $query = "select *
        from `{$this->tableName}`;";

        return $this->fetch($query);
    }
}