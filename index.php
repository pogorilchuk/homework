<?php

/* Домашнее задание после урока №3
 * Сделать таблицу с книгами как на паре, но подкрасить каждую вторую строку в светло-серый*/


//исходные данные
$books = array(

    $book_1 = array(
        'title' => 'Три мушкетера',
        'author' => 'Александр Дюма',
        'year' => '1991',
        'price' => 4.40
    ),

    $book_1 = array(
        'title' => 'Легенда об Уленшпигеле',
        'author' => 'Шарль де Костер',
        'year' => '1983',
        'price' => 2.40
    ),

    $book_1 = array(
        'title' => 'От двух до пяти',
        'author' => 'Корней Чуковский',
        'year' => '1988',
        'price' => 0.90
    )
);


?>
<style>
    td, th
    {
        padding: 5px;
    }
    .odd
    {
        background-color: lightgray;
    }
</style>
<table>
    <tr class="odd">
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>PRICE</th>
    </tr>
<?php

$i = 0;

foreach ($books as $book) {
    $result = (($i % 2) == 1) ?  ' class=\'odd\' ' : ' ';
    echo '<tr'.$result.'>';
    echo '<td>'.$book['title'].'</td>';
    echo '<td>'.$book['author'].'</td>';
    echo '<td>'.$book['price'].'</td></tr>';
    $i++;
}

?>
</table>

