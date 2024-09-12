<?php

namespace app\controllers;

use app\models\ProductModel;
use core\Controller;

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
}