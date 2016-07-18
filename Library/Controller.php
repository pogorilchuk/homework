<?php

/**
 * Created by PhpStorm.
 * User: PHP acedemy
 * Date: 07.07.2016
 * Time: 20:03
 */
abstract class Controller
{
    protected function render($viewName, array $args = array())
    {
        extract($args);
        $tplDir = str_replace('Controller', '', get_class($this));
        $file = VIEW_DIR . $tplDir . DS . $viewName . '.phtml';

        if (!file_exists($file)) {
            die("{$file} not found");
        }

        ob_start();
        require VIEW_DIR . $tplDir . DS . $viewName . '.phtml';
        return ob_get_clean();
    }
}