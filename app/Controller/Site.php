<?php

namespace Controller;

use Model\Subdivision;
use Model\Type_Premise;
use Model\User;
use Model\Premise;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {

       $premises = Premise::all();
       $subdivisions = Subdivision::all();

       return (new View())->render('site.post', ['premises' => $premises, 'subdivisions' => $subdivisions,]);
    }
    public function add_premises(Request $request): string
    {
        $subdivisions = Subdivision::all();
        $premises = Premise::all();
        if ($request->method === 'POST' && Premise::create($request->all())) {
            app()->route->redirect('/go');
        }
        return (new View())->render('site.add_premises', ['premises' => $premises, 'subdivisions' => $subdivisions]);
    }


   public function hello(): string
   {
       return new View('site.hello',);
   }

    public function subdivision(Request $request): string
    {
        $subdivisions = Subdivision::all();
        return (new View())->render('site.subdivision', ['subdivisions' => $subdivisions]);
    }

    public function add_subdivision(Request $request): string
    {
        if ($request->method === 'POST' && Subdivision::create($request->all())) {
            app()->route->redirect('/subdivision');
        }
        return new View('site.add_subdivision');
    }
    public function users(Request $request): string
    {
        $users = User::all();
        return (new View())->render('site.users', ['users' => $users]);
    }
    public function add_users(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/users');
        }
        return new View('site.add_users');
    }

    public function signup(Request $request): string
   {
      if ($request->method === 'POST' && User::create($request->all())) {
          app()->route->redirect('/go');
      }
      return new View('site.signup');
   
    }
    public function login(Request $request): string
    {
    //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
    }
    //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
    }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль!']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

}