<?php

namespace Controller;

use Model\Subdivision;
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
       return (new View())->render('site.post', ['premises' => $premises]);
    }
    public function premises_add(Request $request): string
    {
        if ($request->method === 'POST' && Premise::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.premises_add');
    }


   public function hello(): string
   {
       return new View('site.hello', ['message' => 'hello working']);
   }

    public function subdivision(Request $request): string
    {
        $subdivisions = Subdivision::all();
        return (new View())->render('site.subdivision', ['subdivisions' => $subdivisions]);
    }

    public function subdivision_add(Request $request): string
    {
        if ($request->method === 'POST' && Subdivision::create($request->all())) {
            app()->route->redirect('/subdivision');
        }
        return new View('site.subdivision_add');
    }

//    public function premise_update(Request $request): string
//    {
//        $hall_list = Hall::all();
//        $genre_list = Genre::all();
//        $publisher_list = Publisher::all();
//        $book = Book::where('book_id', $request->id)->get();
//
//
//        if ($request->method == "POST" && Book::where('book_id', $request->id)->update([
//                'name' => $request->name,
//                'author' => $request->author,
//                'date_publish' => $request->date_publish,
//                'price' => $request->price,
//                'annotation'=>$request->annotation,
//                'new' => $request->new,
//                'genre_id'=>$request->genre_id,
//                'hall_id'=>$request->hall_id,
//                'publisher_id'=>$request->publisher_id,
//
//            ])) {
//            app()->route->redirect('/books');
//        }
//
//        return (new View())->render('site.book.book_update', ['hall_list' => $hall_list, 'genre_list' => $genre_list, 'publisher_list' => $publisher_list, 'book'=>$book]);
//    }

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