<?php

namespace app\controllers;

use core\Controller;
use app\models\UserModel;

class UserController extends Controller
{
    private UserModel $user;

    public function __construct() {
        $this->user = new UserModel();
    }
    public function index(): void
    {
        $this->view('users/index', ['users' => $this->user->users()]);
    }
}