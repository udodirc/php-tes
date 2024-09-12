<?php

namespace app\controllers;

use app\models\ProductModel;
use core\Controller;
use core\Validation;

class ProductController extends Controller
{
    private ProductModel $product;

    public function __construct() {
        $this->product = new ProductModel();
    }
    public function index(): void
    {
        $this->view('products/index', ['products' => $this->product->products()]);
    }

    public function create(): void
    {
        $this->view('products/create', []);
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
                $this->redirect('products');
            }
        }

        $this->view('products/create', [
            'errors' => $data['errors']
        ]);
    }
}