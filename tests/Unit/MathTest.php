<?php

namespace Tests\Unit;


it('adds numbers', function () { 
    $sum = 2 + 2;
    expect($sum)->toBe(4);
});

/*
it('...', fn () {}) -> defines a test

expect($value)      -> assertions (matchers)

Matchers -> readable checks => example: toBe(), toEqual(), toBeTrue(), toContain(), toHaveKey()…

beforeEach(fn(){}) -> run setup before each test => example: create users, seed data

*/
