<?php

class Books
{
	public $title;
	public $author;
	public $year;
	public $price;
	
	public function __construct($title, $author, $year, $price)
	{
		$this->title = $title;
		$this->author = $author;
		$this->year = $year;
		$this->price = $price;
	}

}