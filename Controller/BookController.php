<?php

/**
 * Created by PhpStorm.
 * User: PHP acedemy
 * Date: 07.07.2016
 * Time: 19:10
 */
class BookController extends Controller
{
    public function indexAction(Request $request)
    {
        $bookModel = new BookModel();
        $books = $bookModel->findAll();

        return $this->render('index', array('books' => $books));
    }


}