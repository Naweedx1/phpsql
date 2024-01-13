<?php

use Core\Validator;
use Core\Database;
use Core\App;
use Core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];

//validate form inputs
$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email';
}

if (!Validator::string($password, 7, 200)) {
    $errors['password'] = 'Password has to be between 7 and 200 characters long!!';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('location: /');
    exit();
} else {
    $db->query('insert into users(email, password) values(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    (new Authenticator())->login($user);

    header('location: /');
    exit();
}
