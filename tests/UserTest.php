<?php

namespace Tests;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
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