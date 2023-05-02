<?php

use Src\Route;


Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add('GET', '/go', [Controller\Site::class, 'index'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_premises', [Controller\Site::class, 'add_premises'])
    ->middleware('auth');
Route::add('GET', '/subdivision', [Controller\Site::class, 'subdivision'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_subdivision', [Controller\Site::class, 'add_subdivision'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/users', [Controller\Site::class, 'users'])
    ->middleware('auth', 'can:admin');
Route::add(['GET', 'POST'], '/add_users', [Controller\Site::class, 'add_users'])
    ->middleware('auth', 'can:admin');

