<?php

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