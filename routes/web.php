<?php

use Src\Route;


Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add('GET', '/premises', [Controller\PremiseView::class, 'premises'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_premises', [Controller\PremiseView::class, 'add_premises'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/update_premises', [Controller\PremiseView::class, 'update_premises'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/delete-premises', [Controller\PremiseView::class, 'delete_premises'])
    ->middleware('auth');
Route::add('GET', '/subdivision', [Controller\SubdivisionView::class, 'subdivision'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_subdivision', [Controller\SubdivisionView::class, 'add_subdivision'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/delete-subdivisions', [Controller\SubdivisionView::class, 'delete_subdivisions'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/users', [Controller\UsersView::class, 'users'])
    ->middleware('auth', 'can:admin');
Route::add(['GET', 'POST'], '/add_users', [Controller\UsersView::class, 'add_users'])
    ->middleware('auth', 'can:admin');
Route::add(['GET', 'POST'], '/delete-users', [Controller\UsersView::class, 'delete_users'])
    ->middleware('auth', 'can:admin');

