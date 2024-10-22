<?php

class Alumnado
{
    private $email, $password, $rol;
    public function __construct($email, $password, $rol)
    {
        $this->email = $email;
        $this->password = $password;
        $this->rol = $rol;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getRol()
    {
        return $this->rol;
    }
}
