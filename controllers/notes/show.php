<?php

use Core\Database;

// $config = require 'config.php';
$config = require base_path('config.php');
$db = new Database($config['database'], 'dushyant', 'dushyant@mysql');
$user_id = 3;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query("select * from notes where id = :id", [
        'id' => $_POST['id']
    ])->findOrFail();

    authorize($note['user_id'] === $user_id);

    // form was submitted, delete the note
    $db->query('DELETE FROM notes WHERE id = :id', [
        'id' => $_POST['id']
    ]);

    header('location: /notes');
    exit();
} else {
    $heading = 'Note';

    $note = $db->query("select * from notes where id = :id", [
        'id' => $_GET['id']
    ])->findOrFail();

    // check if the user if authorized to view the note
    authorize($note['user_id'] === $user_id);

    //if(!$note){
    //    abort();
    //}

    //if($note['user_id'] !== $user_id){
    //    abort(Response::FORBIDDEN);
    //}

    // require 'views/notes/show.view.php';

    view("notes/show.view.php", [
        'heading' => 'Note',
        'note' => $note
    ]);
}