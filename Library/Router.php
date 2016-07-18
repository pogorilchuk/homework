<?php

/**
 * Created by PhpStorm.
 * User: PHP acedemy
 * Date: 07.07.2016
 * Time: 20:37
 */
abstract class Router
{
    public static function redirect($to)
    {
        header('Location: ' . $to);
        die;
    }
}