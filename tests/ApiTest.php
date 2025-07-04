<?php

namespace Tests;

require_once "vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testUserApiReturnsUsers(): void
    {
        $url = 'http://localhost:8888/users';

        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => "Accept: application/json\r\n",
            ],
        ]);

        $response = file_get_contents($url, false, $context);

        $data = json_decode($response, true);

        $this->assertIsArray($data, 'Ответ не является массивом');

        $this->assertNotEmpty($data, 'Массив пользователей пуст');

        foreach ($data as $user) {
            $this->assertIsArray($user);
            $this->assertArrayHasKey('id', $user);
            $this->assertArrayHasKey('name', $user);
        }
    }
}