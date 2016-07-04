<?php 

/*Создать класс User со свойствами login, password, email, rating. По умолчанию значение рейтинга задать нулевым.*/

class User
{
	public $login;
	public $password;
	public $email;
	public $rating = 0;
	}

/*Создать класс Car. Записать в этот класс свойства brand, model, year, driver. Создать экземпляры машин Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995) . В рамках предыдущего задания создать экземпляры класса User для нескольких пользователей системы. В свойство driver объектов класса Car записать объекты класса User. Вывести объекты класса Car на экран при помощи var_dump(), print_r()*/

class Car
{
	public $brand;
	public $model;
	public $year;
	public $driver;
	}

$car_toyota = new Car;
$car_mazda = new Car;
$car_ford = new Car;

$car_toyota->brand = 'Toyota';
$car_toyota->model = 'Corolla';
$car_toyota->year = 2000;

$car_mazda->brand = 'Mazda';
$car_mazda->model = '6';
$car_mazda->year = 2015;

$car_ford->brand = 'Ford';
$car_ford->model = 'Taurus';
$car_ford->year = 1995;

$driver_alex = new User;
$driver_vova = new User;
$car_toyota->driver = $driver_alex;
$car_ford->driver = $driver_alex;
$car_mazda->driver = $driver_vova;


$driver_alex->login = 'Alex';
$driver_alex->password = 123;
$driver_alex->email = 'qqq@qqq.qq';



$driver_vova->login = 'Vova';
$driver_vova->password = 789;
$driver_vova->email = 'zzz@zzz.zz';
?>
<table><tr><td>
<?php
	echo '<pre>'; 
	var_dump($car_toyota);
	echo '<br><br>';
	print_r($car_toyota);
	echo '</pre>';
?>
</td><td>
<?php
	echo '<pre>'; 
	var_dump($car_ford);
	echo '<br><br>';
	print_r($car_ford);
	echo '</pre>';
?>
</td><td>	
<?php
	echo '<pre>'; 
	var_dump($car_mazda);
	echo '<br><br>';
	print_r($car_mazda);
	echo '</pre>';
?>
</td></tr></table>