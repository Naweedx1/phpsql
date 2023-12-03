<?php

//connect to our MySQL database.
$config = require "config.php";
$db = new Database($config['database']);

$heading = 'Single Note';

$id = $_GET['id'];

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();

if (!$note) {
    abort();
};

$currentUserId = '1';

if ($note['user-id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
};

require "views/note.view.php";
