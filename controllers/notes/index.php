<?php

//connect to our MySQL database.
$config = require base_path("config.php");
$db = new Database($config['database']);

$notes = $db->query('select * from notes')->findAll();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
