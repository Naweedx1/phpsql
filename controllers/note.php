<?php

//connect to our MySQL database.
$config = require "config.php";
$db = new Database($config['database']);

$heading = 'Single Note';

$id = $_GET['id'];

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

$currentUserId = '1';

authorize($note['user-id'] === $currentUserId);

require "views/note.view.php";
