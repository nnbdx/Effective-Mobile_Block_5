<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function findUserByEmail(string $email);
}