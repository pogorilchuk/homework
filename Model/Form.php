<?php

class Form
{
    public $username;
    public $email;
    public $message;

    public function __construct(Request $request)
    {
        $this->email = $request->post('email');
        $this->username = $request->post('username');
        $this->message = $request->post('message');
    }

    public function isValid()
    {
        return $this->username != ''
        && $this->email != ''
        && $this->message != '';
    }
}