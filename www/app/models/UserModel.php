<?php

namespace app\models;

use core\Model;

class UserModel extends Model
{
    public function getUsers(): array|false
    {
        return $this->fetch("SELECT * FROM user");
    }
}