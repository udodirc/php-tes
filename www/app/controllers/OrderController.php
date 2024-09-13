<?php

namespace app\controllers;

use app\models\OrderModel;
use app\models\ProductModel;
use app\models\UserModel;
use core\Controller;
use core\Validation;

class OrderController extends Controller
{
    private ProductModel $product;
    private UserModel $user;

    private OrderModel $order;

    public function __construct() {
        $this->product = new ProductModel();
        $this->user = new UserModel();
        $this->order = new OrderModel();
    }

    public function create(): void
    {
        $this->view('orders/create', [
            'users' => $this->user->users(),
            'products' => $this->product->products(),
        ]);
    }

    public function store(): void
    {
        $validationRules = [
            'user_id' => ['required', 'is_numeric'],
            'product_id' => ['required', 'is_numeric'],
        ];
        $data = Validation::validate($validationRules);

        if (empty($data['errors'])) {
            if($this->order->store($this->order->tableName, $data['data'])){
                $this->redirect('users');
            }
        }

        $this->view('orders/create', [
            'errors' => $data['errors'],
            'users' => $this->user->users(),
            'products' => $this->product->products(),
        ]);
    }
}