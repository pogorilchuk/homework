<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS);
define('VIEW_DIR', ROOT . 'View' . DS);
define('CONTROLLER_DIR', ROOT . 'Controller' . DS);
define('MODEL_DIR', ROOT . 'Model' . DS);
define('LIB_DIR', ROOT . 'Library' . DS);


function __autoload($className) // 'Car.php'
{
    $file = "{$className}.php";

    if (file_exists(LIB_DIR . $file)) {
        require LIB_DIR . $file;
    } elseif (file_exists(CONTROLLER_DIR . $file)) {
        require CONTROLLER_DIR . $file;
    } elseif (file_exists(MODEL_DIR . $file)) {
        require MODEL_DIR . $file;
    } else {
        die("{$file} not found");
    }
}

$request = new Request();
$route = $request->get('route'); // $_GET['route']

if (empty($route)) {
    $route = 'index/index';
}
// todo: possible bugs with '/' ??
$route = explode('/', $route);

$controller = ucfirst($route[0]) . 'Controller';
$action = $route[1] . 'Action';

$controller = new $controller();

if (!method_exists($controller, $action)) {
    die("{$action} not found");
}

$content = $controller->$action($request);

require VIEW_DIR . 'default_layout.phtml';


echo '<hr>';
var_dump($controller, $action);


