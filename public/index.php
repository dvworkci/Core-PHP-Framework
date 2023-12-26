<?php

// Base Path of Project
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

require base_path('Database.php');
require base_path('Response.php');
require base_path('router.php');

//$id = $_GET['id'];
//$query = "select * from posts where id = :id";
//
//$post = $db->query($query,['id' => $id])->fetch();
//
//dd($post);

//foreach ($posts as $post){
//    echo "<li>" . $post["title"] . "</li>";
//}
