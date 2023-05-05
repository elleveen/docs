<?php

namespace Controller;

use Model\Role;
use Model\User;
use Src\View;
use Src\Request;

class UsersView{
    public function users(Request $request): string
    {
        if ($request->method === "POST") {
            $users_list = User::where('name', 'like', '%' . $request->search . '%')->get();
        } else {
            $users_list = User::orderBy('name')->get();
        }
        return (new View())->render('site.users.users', ['users' => $users_list]);
    }
    public function add_users(Request $request): string
    {
        $roles = Role::all();

        if ($request->method === "POST") {
            $path = '../public/images/';
            $storage = new \Upload\Storage\FileSystem($path);
            $file = new \Upload\File('cover_file', $storage);

            $new_filename = uniqid();
            $file->setName($new_filename);

            $file_name = $file->getNameWithExtension($new_filename);

            try {
                $file->upload();
            } catch (\Exception $e) {
                $errors = $file->getErrors();
            }

            if (User::create([
                'name' => str($request->name),
                'login' => str($request->login),
                'id_role' => ($request->id_role),
                'password' => str($request->password),
                'cover' => str(($path . $file_name)),
            ])) {
                app()->route->redirect('/users');
            }
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