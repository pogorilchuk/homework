<?php

/**
 * Created by PhpStorm.
 * User: Марина
 * Date: 09.08.2016
 * Time: 15:18
 */
class NotFoundException extends Exception
{

    public function __construct($message)
    {
        parent::__construct($message, 404);
    }
}