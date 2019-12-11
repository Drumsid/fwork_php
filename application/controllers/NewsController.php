<?php

namespace application\controllers;

use application\core\Controller;

class NewsController extends Controller
{
    public function showAction()
    {    
        $vars = [
            'name' => "Johnny",
            'age' => 35
        ];
        // var_dump($vars);
        $this->view->render('Show page test', $vars);
    }
}