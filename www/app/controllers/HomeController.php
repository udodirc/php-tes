<?php
namespace app\controllers;

use core\Controller;
use app\models\UserModel;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('home');
    }

    public function showUser(): void
    {
        $user = new UserModel();
        $users = $user->getUsers();

        $this->view('users', ['users' => $users]);
    }
}