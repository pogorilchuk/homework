<?php

function __autoload($className)
{
	require $className.'.php';
}

//создаем экземпляры класса Books
$book_1 = new Books('Три мушкетера', 'Александр Дюма', '1991', 35);
$book_2 = new Books('Легенда об Уленшпигеле', 'Шарль де Костер', '1983', 24);
$book_3 = new Books('От двух до пяти', 'Корней Чуковский', '1988', 5);

//выводим их на экран в цикле
echo '<pre>';

	for ($i=1; $i<4; $i++)
	  {
		$q = 'book_'.$i;
		var_dump($$q);
		echo '<br><br>';
		print_r($$q);
	  }
  
echo '</pre>';

?>