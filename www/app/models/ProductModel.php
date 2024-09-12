<?php

namespace app\models;

use core\Model;

class ProductModel extends Model
{
    public function products(): array|false
    {
        $query = "select *
        from `products`;";

        return $this->fetch($query);
    }
}