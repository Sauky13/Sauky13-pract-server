<?php

namespace Controller;

use Src\Request;
use Src\View;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;
class Site
{

    public function hello(): string
    {
        return new View('site.hello');
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
    public function count_total_area_by_institution(Request $request): string
    {
        return new View('site.count_total_area_by_institution');
    }
    public function count_total_area_by_buildings(Request $request): string
    {
        return new View('site.count_total_area_by_buildings');
    }
    public function select_room_numbers_by_buildings(Request $request): string
    {
        return new View('site.select_room_numbers_by_buildings');
    }
  


    public function signup(Request $request): string{
   if ($request->method === 'POST') {

       $validator = new Validator($request->all(), [
           'name' => ['required'],
           'login' => ['required', 'unique:users,login'],
           'password' => ['required']
       ], [
           'required' => 'Поле :field пусто',
           'unique' => 'Поле :field должно быть уникально'
       ]);

       if($validator->fails()){
           return new View('site.signup',
               ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
       }

       if (User::create($request->all())) {
           app()->route->redirect('/login');
       }
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








