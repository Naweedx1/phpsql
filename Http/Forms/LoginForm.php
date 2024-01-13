<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function __construct($attributes)
    {
        if (!Validator::email($email)) {
            $errors['email'] = 'Please provide a valid email';
        }

        if (!Validator::string($password)) {
            $errors['password'] = 'please provide a valid password!!';
        }
    }

    public function validate($attributes)
    {
        $instance = new static($attributes);

        if ($instance->failed()) {
            throw new \Exception();
        }
    }

    public function failed()
    {
        return count($this->errors);
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
