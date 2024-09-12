<?php

namespace app\controllers;

use core\Controller;
use app\models\UserModel;

class UserController extends Controller
{
    public function users(): void
    {
        $user = new UserModel();
        $users = $user->getUsers();

        $this->view('users', ['users' => $users]);
    }
}