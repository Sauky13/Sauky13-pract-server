<?php

namespace Controller;

use Model\Post;
use Src\Request;
use Src\View;
use Model\User;
use Src\Auth\Auth;

class Site
{

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working!!!']);
    }


    public function add_rooms(Request $request): string
    {
        return new View('site.add_rooms');
    }
    public function add_buildings(Request $request): string
    {
        return new View('site.add_buildings');
    }
    public function count_seats_by_buildings(Request $request): string
    {
        return new View('site.count_seats_by_buildings');
    }


    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
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
       return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }
    
    public function logout(): void
    {
       Auth::logout();
       app()->route->redirect('/hello');
    }

    

}








