<?php
$config = require 'config.php';
$db = new Database($config['database']);

$user_id = 1;
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

require 'views/notes/note.view.php';