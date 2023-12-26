<?php
$config = require base_path('config.php');
$db = new Database($config['database'],'dushyant','dushyant@mysql');

// $heading = 'My Notes';

$notes = $db->query("select * from notes where user_id = :user",[
    'user' => 3,
])->getAll();

// require "views/notes/index.view.php";

view("notes/index.view.php",[
    'heading' => 'My Notes',
    'notes' => $notes
]);