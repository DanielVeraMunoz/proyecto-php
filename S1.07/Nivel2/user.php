<?php

class User{
    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email)
    {
        $this->username= $username;
        $this->password=$password;
        $this->email=$email;
    }


public function __toString(){
    return "Username: " . $this->username . "<br>" .
    "Password: " . $this->password . "<br>" . 
    "Email: " . $this->email;
}

}