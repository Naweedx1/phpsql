<?php

use Core\Validator;
use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

LoginForm::validate([
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);


if ((new Authenticator)->attempt($email, $password)) {
    redirect('/');
}
$form->error('email', 'verify the email or password!');

Session::flash('errors', $form->errors());

Session::flash('old', [
    'email' => $_POST['email']
]);

return redirect('/login');
