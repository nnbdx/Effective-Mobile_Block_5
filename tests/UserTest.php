<?php

namespace tests;

require_once "vendor/autoload.php";

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

// Задание 1

//    public function testCanCreateUser()
//    {
//        $user = new User();
//        $this->assertInstanceOf(User::class, $user);
//    }

// Задание 2

//    public function testUserCanBeCreated()
//    {
//        $name = "Anna";
//
//        $user = new User($name);
//
//        $this->assertInstanceOf(User::class, $user);
//        $this->assertEquals($name, $user->name);
//    }

// Задание 3

    public function testUserCanBeCreated()
    {
        $user = new User('Helena', 'Smith');

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('Helena', $user->firstName);
        $this->assertEquals('Smith', $user->lastName);
    }

    public function testUserFullName()
    {
        $user = new User('Helena', 'Smith');

        $expectedFullName = 'Helena Smith';
        $this->assertEquals($expectedFullName, $user->getFullName());
    }
}