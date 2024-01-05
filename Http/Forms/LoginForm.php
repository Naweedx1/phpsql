<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($email, $password)
    {
        $errors = [];

        if (!Validator::email($email)) {
            $errors['email'] = 'Please provide a valid email';
        }

        if (!Validator::string($password)) {
            $errors['password'] = 'please provide a valid password!!';
        }

        return empty($errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors['field'] = $message;
    }
}
