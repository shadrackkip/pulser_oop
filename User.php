<?php

class User {
    public $f_name;
    public $l_name;
    public $email;

    public function __construct($f_name,$l_name,$email)
    {
        $this->f_name=$f_name;
        $this->l_name=$l_name;
        $this->email=$email;
    }

    public function getFirstName()
    {
      return $this->f_name;
    }
   
    public function getLastName()
    {
      return $this->l_name;
    }
    public function getEmail()
    {
      return $this->email;
    }
}
