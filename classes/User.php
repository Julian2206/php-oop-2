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


    public function __construct(
        $_username,
        $_email,
        $_address,
        $_creditCardExpired,
        $_signed,
        $_discount
    ) {
        $this->username = $_username;
        $this->email = $_email;
        $this->address = $_address;
        $this->creditCardExpired = $_creditCardExpired;
        $this->signed = $_signed;
        $this->discount = $_discount;
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

    public function getSigned()
    {
        return $this->signed;
    }
    public function setSigned($_signed)
    {
        $this->signed = $_signed;
    }

    /* try set user discount */

    public function getDiscount($discount)
    {
        if ($this->signed == true) {
            $discount = 20;
            //return $this->price - ($this->price * $discount / 100);
        }
        //return $this->discount;
    }
    public function setDiscount($_discount)
    {
        $this->discount = $_discount;
    }
}


$user1 = new User("Bobby", "realBobby@gmail.com", "Bobby's farm", 'false', 'true', 20);
$user2 = new User("Hobby", "realHobby@gmail.com", "Hobby's farm", 'false', 'false', 0);
$user3 = new User("Lobby", "realLobby@gmail.com", "Lobby's farm", 'false', 'true', 20);

var_dump($user1, $user2, $user3);
