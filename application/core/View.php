<?php

namespace application\core;


class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);
        $pathToView = 'application/views/' . $this->path . '.php';

        if (file_exists($pathToView)) {
            ob_start();
            require $pathToView;
            $content = ob_get_clean();
            require 'application/views/layouts/' . $this->layout . '.php';
        } else {
            echo "Вид не найден: " . $this->path;
        }
    }

    public function redirect($url)
    {
        header('location: ' . $url);
        exit;
    }

    public static function errorCode($code)
    {
        http_response_code($code);
        $pathToError = 'application/views/errors/' . $code . '.php';
        if (file_exists($pathToError)) {
            require $pathToError;
        }
        exit;
    }

    public function message($status, $message)
    {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public function location($url)
    {
        exit(json_encode(['url' => $url]));
    }
}
