<?php

// Base Path of Project
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

// require base_path('Database.php');
// require base_path('Response.php');

// autoload a class using spl_autoload_register PHP function
// spl_autoload_register(function ($class) {
//     require base_path("Core/{$class}.php");
// });

// In case of using a namespace
spl_autoload_register(function ($class) {
    $class = str_replace('\\',DIRECTORY_SEPARATOR,$class);
    require base_path("{$class}.php");
});

//require base_path('Core/router.php');
// new Router class
$router = new \Core\Router();

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
//routeTo($uri,$routes);
$router->route($uri,$method);

//$id = $_GET['id'];
//$query = "select * from posts where id = :id";
//
//$post = $db->query($query,['id' => $id])->fetch();
//
//dd($post);

//foreach ($posts as $post){
//    echo "<li>" . $post["title"] . "</li>";
//}
