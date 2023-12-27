<?php
use Core\Response;
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function uri_is($uri){
    return $_SERVER['REQUEST_URI'] === $uri;
}

function authorize($condition,$status = Response::FORBIDDEN){
    if(!$condition){
        abort($status);
    }
}

function base_path($path){
    return BASE_PATH . $path;
}

function view($path,$attributes = []) {
    extract($attributes);
    require base_path('views/' . $path);
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}