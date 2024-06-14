<?php

use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

beforeEach(function () {
    Route::get('/', fn () => 'Hello, world!');
});

it('enforces basic auth', function () {
    config()->set([
        'basic-auth.enabled' => true,
    ]);

    get('/')
        ->assertUnauthorized();
});

it('allows access when disabled', function () {
    config()->set([
        'basic-auth.enabled' => false,
    ]);

    get('/')
        ->assertOk();
});

it('allows access with valid credentials', function () {
    config()->set([
        'basic-auth.enabled' => true,
        'basic-auth.username' => 'admin',
        'basic-auth.password' => 'password',
    ]);

    get('/', [
        'PHP_AUTH_USER' => 'admin',
        'PHP_AUTH_PW' => 'password',
    ])
        ->assertOk();
});

it('allows access with valid credentials using auth header', function () {
    config()->set([
        'basic-auth.enabled' => true,
        'basic-auth.username' => 'admin',
        'basic-auth.password' => 'password',
    ]);

    get('/', [
        'Authorization' => 'Basic '.base64_encode('admin:password'),
    ])
        ->assertOk();
});
