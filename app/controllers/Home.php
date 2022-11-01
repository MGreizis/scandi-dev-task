<?php

namespace app\controllers;
use core\RenderView;
require_once('../core/RenderView.php');

class Home
{
    public function index()
    {
        RenderView::render('index.php');
    }
}