<?php

namespace application\core;

abstract class Controller
{
    public $params;

    public function __construct($params)
    {
        $this->params = $params;
        echo "Hello" . PHP_EOL;
        var_dump($this->params);
    }
}
