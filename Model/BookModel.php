<?php

/**
 * Created by PhpStorm.
 * User: PHP acedemy
 * Date: 07.07.2016
 * Time: 20:46
 */
class BookModel
{
    public function findAll()
    {
        return $books = array(
            array(
                'title' => 'rtert',
                'price' => 6456,
                'author' => 'dfg'
            ),
            array(
                'title' => 'hjkhjk',
                'price' => 2131,
                'author' => 'zxzc'
            )
        );
    }

    public function find($id)
    {
        $books = array(
            array(
                'title' => 'rtert',
                'price' => 6456,
                'author' => 'dfg'
            ),
            array(
                'title' => 'hjkhjk',
                'price' => 2131,
                'author' => 'zxzc'
            )
        );

        if (!isset($books[$id]))
        {
            throw new NotFoundException ("Book #{$id} not found", 404);
        }

        return $books[$id];
    }

}