<?php
require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Create new note';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
//    $validator = new Validator();
    $errors = [];

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
            'user_id' => 1
        ]);
    }
}

require 'views/notes/note-create.view.php';