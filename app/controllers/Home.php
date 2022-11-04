<?php

namespace app\controllers;
use core\RenderView;
use app\models\Product;
require_once('../core/RenderView.php');
require_once('../app/models/Product.php');

class Home
{
    public function index()
    {
        $products = Product::getAll();

        RenderView::render('index.php', [
            'products' => $products
        ]);
        // RenderView::render('index.php');
    }
}