<?php
$config = require base_path("config.php");
$db = new Database($config['database']);

$heading = 'Create Note';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    // $validator = new Validator();

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A note of no more than 1000 characters is required!';
        $_POST['body'] = '';
    }

    if (empty($errors)) {
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);
