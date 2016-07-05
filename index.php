<?php
function __autoload($className) // 'Car.php'
{
    require "{$className}.php";
}
$request = new Request();
$form = new Form($request);
$msg = $request->get('flash_msg'); // $_GET['username']
if ($request->isPost()) {
    if ($form->isValid()) {
        // bla-bla
        header('Location: /?flash_msg=valid');
        die;
    }
    $msg = 'invalid';
}
require 'layout.phtml';