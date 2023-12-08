<?php

//connect to our MySQL database.
$config = require base_path("config.php");
$db = new Database($config['database']);

$id = $_GET['id'];

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);