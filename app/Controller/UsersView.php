<?php

namespace Controller;

use Model\Premise;
use Model\Role;
use Model\Subdivision;
use Model\Type_Premise;
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
    public function update_user(Request $request)
    {
        $roles = Role::all();
        $users= User::where('id', $request->id)->first();
        if($request->method === 'POST') {
            $updateUsers = [
                'name' => $request->get('name'),
                'login' => $request->get('login'),
                'password' => $request->get('password'),
                'id_role' => $request->get('id_role'),
            ];
            $users->update($updateUsers);
            return app()->route->redirect('/users?id=' . $users->id);
        }
        return (new View())->render('site.users.update_user', ['users' => $users, 'roles' => $roles,]);
    }
    public function delete_users(Request $request): void
    {
        if (User::where('id', $request->id)->delete()) {
            app()->route->redirect('/users');
        }
    }
}