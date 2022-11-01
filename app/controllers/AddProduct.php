<?php

namespace app\controllers;
use core\RenderView;

require_once('../core/RenderView.php');
require '../core/Controller.php';

class AddProduct extends \core\Controller
{
    public function index()
    {
        RenderView::render('addproduct.php');
    }
}