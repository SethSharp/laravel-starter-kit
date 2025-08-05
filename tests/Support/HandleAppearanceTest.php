<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('foo', function () {
    expect(1)->toEqual(1);
});
