<?php

namespace App\Services;

use App\Interfaces\UserRepositoryInterface;

class UserService
{
    private UserRepositoryInterface $userRepositoryInterface;

    public function __construct(UserRepositoryInterface $userRepositoryInterface) {
        $this->userRepositoryInterface = $userRepositoryInterface;
    }

    public function getUserByEmail(string $email): ?array
    {
        return $this->userRepositoryInterface->findUserByEmail($email);
    }
}