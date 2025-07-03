<?php

namespace App;

class User
{

// Задание 1

//    public string $name;
//
//    public function __construct()
//    {
//        $this->name = "Anna";
//    }

// Задание 2

//    public string $name;
//
//    public function __construct(string $name)
//    {
//        $this->name = $name;
//    }

// Задание 3

    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}