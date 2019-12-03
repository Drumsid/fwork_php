<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        echo "Page Index";
    }
    public function contactAction()
    {
        echo "Page Contact";
    }
}
