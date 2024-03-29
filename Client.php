<?php

class Client
{
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct($name=null, $email=null, $password=null)
    {
        $this->name = $name;
        $this->email = $email;
        //$this->password = password_hash($password,PASSWORD_DEFAULT);
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }





}