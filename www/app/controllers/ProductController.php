<?php

namespace app\controllers;

use app\models\ProductModel;
use app\models\UserModel;
use core\Controller;
use core\Validation;

class ProductController extends Controller
{
    private ProductModel $product;
    private UserModel $user;

    public function __construct() {
        $this->product = new ProductModel();
        $this->user = new UserModel();
    }
    public function index(): void
    {
        $this->view('products/index', ['products' => $this->product->products()]);
    }

    public function create(): void
    {
        $this->view('products/create', ['users' => $this->user->users()]);
    }

    public function store(): void
    {
        $validationRules = [
            'title' => ['required'],
            'price' => ['required', 'is_numeric'],
        ];
        $data = Validation::validate($validationRules);

        if (empty($data['errors'])) {
            if($this->product->store($data['data'])){
                $this->redirect('users');
            }
        }

        $this->view('products/create', [
            'errors' => $data['errors']
        ]);
    }
}