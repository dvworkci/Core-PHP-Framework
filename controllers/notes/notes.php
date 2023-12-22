<?php
$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query("select * from notes where user_id = :user",[
    'user' => 1,
])->getAll();

require "views/notes/notes.view.php";