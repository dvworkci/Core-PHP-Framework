<?php
// $config = require 'config.php';
$config = require base_path('config.php');
$db = new Database($config['database'],'dushyant','dushyant@mysql');

$user_id = 3;
$heading = 'Note';

$note = $db->query("select * from notes where id = :id",[
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

view("notes/show.view.php",[
    'heading' => 'Note',
    'note' => $note
]);