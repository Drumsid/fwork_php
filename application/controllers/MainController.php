<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{
    public function indexAction()
    {
        $db = new Db;

        // $form = '4; DELETE FROM users';   <= sql inection
        $params = [
            'id' => 3,
        ];

        $query = $db->column('SELECT name FROM users WHERE id = :id', $params);
        myDebug($query);

        $this->view->render('Главная страница');
    }
    public function contactAction()
    {
        // $this->view->redirect('/');
        $this->view->render('Контакты');
    }
}
