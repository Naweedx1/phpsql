<?php

//connect to our MySQL database.
$config = require "config.php";
$db = new Database($config['database']);

$heading = 'Notes Archive';

$notes = $db->query('select * from notes')->findAll();

require "views/notes.view.php";