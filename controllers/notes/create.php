<?php
require base_path('Validator.php');

// $config = require 'config.php';
$config = require base_path('config.php');
$db = new Database($config['database'],'dushyant','dushyant@mysql');

// $heading = 'Create new note';
$errors = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
//    $validator = new Validator();

//    if(strlen($_POST['body']) === 0){
//        $errors['body'] = 'A body is required.';
//    }
//    if(strlen($_POST['body']) > 2000){
//        $errors['body'] = 'The body cannot be more than 2,000 characters.';
//    }

    if(!Validator::string($_POST['body'],1,2000)){
        $errors['body'] = 'A body of no more than 2,000 characters is required.';
    }

    if(empty($errors)){
        $db->query("INSERT INTO notes(body,user_id) VALUE(:body,:user_id) ",[
            'body' => $_POST['body'],
            'user_id' => 3
        ]);
    }
}

// require 'views/notes/create.view.php';

view("notes/create.view.php",[
    'heading' => 'Create New Note',
    'errors' => $errors
]);