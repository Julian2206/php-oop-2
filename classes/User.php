<?php

include_once __DIR__ . '/Product.php';

class User
{
    private $username;
    private $email;
    private $address;
    private $creditCardExpired;
    private $signed = false;

    private $discount = 0;

    public function __construct($_username, $_email, $_address, $_creditCardExpired)
    {
        $this->username = $_username;
        $this->email = $_email;
        $this->address = $_address;
        $this->creditCardExpired = $_creditCardExpired;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($_username)
    {
        $this->username = $_username;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($_email)
    {
        $this->email = $_email;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($_address)
    {
        $this->address = $_address;
    }
    public function getCreditCardExpired()
    {
        return $this->creditCardExpired;
    }

    public function setCreditCardExpired($_creditCardExpired)
    {
        $this->creditCardExpired = $_creditCardExpired;
    }
}
