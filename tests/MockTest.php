<?php

namespace Tests;

use App\Interfaces\UserRepositoryInterface;
use App\Services\UserService;
use Mockery;
use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testFindUserByEmail()
    {
        $userRepositoryMock = Mockery::mock(UserRepositoryInterface::class);

        $userRepositoryMock->shouldReceive('findUserByEmail')
            ->once()
            ->with('text@gmail.com')
            ->andReturn(['id' => 1, 'email' => 'text@gmail.com']);

        $userService = new UserService($userRepositoryMock);

        $result = $userService->getUserByEmail('text@gmail.com');

        $this->assertEquals(['id' => 1, 'email' => 'text@gmail.com'], $result);
    }
}