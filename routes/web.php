<?php

use Src\Route;


Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add('GET', '/go', [Controller\Site::class, 'index'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/premises_add', [Controller\Site::class, 'premises_add'])
    ->middleware('auth');
Route::add('GET', '/subdivision', [Controller\Site::class, 'subdivision'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/subdivision_add', [Controller\Site::class, 'subdivision_add'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

