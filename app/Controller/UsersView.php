<?php

namespace Controller;

use Model\Role;
use Model\User;
use Src\View;
use Src\Request;

class UsersView{
    public function users(Request $request): string
    {
        $users = User::all();
        return (new View())->render('site.users.users', ['users' => $users]);
    }
    public function add_users(Request $request): string
    {
        $roles = Role::all();
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/users');
        }
        return new View('site.users.add_users', ['roles' => $roles]);
    }
    public function delete_users(Request $request): void
    {
        if (User::where('id', $request->id)->delete()) {
            app()->route->redirect('/users');
        }
    }
}