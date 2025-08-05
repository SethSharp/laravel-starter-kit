<?php

use Domain\Iam\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('user', function () {
    $user = User::factory()->create();

    expect($user)->toBeInstanceOf(User::class);
});
