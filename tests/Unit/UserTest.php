<?php

namespace Tests\Unit;

require_once ("vendor/autoload.php");

use App\User;

test('создание экземпляра User и проверка $name', function () {
    $user = new User('Anna');

    expect($user->getName())->toBe('Anna');
});