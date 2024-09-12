<?php

namespace app\models;

use core\Model;

class UserModel extends Model
{
    public function users(): array|false
    {
        $query = "select `user`.`first_name`, `user`.`second_name`, `products`.`title`, `products`.`price`
        from `user`
        inner join `user_order` on `user`.`id` = `user_order`.`user_id`
        inner join `products` on `user_order`.`product_id` = `products`.`id`
        order by `products`.`title`, `products`.`price` desc;";

        return $this->fetch($query);
    }
}