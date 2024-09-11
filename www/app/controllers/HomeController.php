<?php
namespace app\controllers;

use core\Controller;
use app\models\UserModel;

class HomeController extends Controller
{
    public function index() {
        $this->view('home');
    }

    public function showUser() {
        $users = [
            new UserModel('user', 'user@test.com'),
            new UserModel('user2', 'user2@test.com'),
            new UserModel('user3', 'user3@test.com')
        ];
        $this->view('users', ['users' => $users]);
    }
}