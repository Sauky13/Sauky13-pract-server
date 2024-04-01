<?php

namespace Controller;

use Src\Validator\Validator;
use Src\Request;
use Src\View;
use Model\User;
use Src\Auth\Auth;
use Model\Building;
use Model\Rooms;
use Model\Room_types;

class Site
{

    public function count_seats_by_buildings(Request $request): string
    {
        $roombuilding = Building::all();
        $totalPlaces = 0;

        // Если здание не выбрано, то 0
        $build_id = !empty($_GET['building_id']) ? $_GET['building_id'] : null;

        $rooms = Rooms::where('building_id', $build_id)->get();
        foreach ($rooms as $room) {
            $totalPlaces += $room->places;
        }

        return new View('site.count_seats_by_buildings', ['roombuilding' => $roombuilding, 'totalPlaces' => $totalPlaces]);
    }

    public function hello(): string
    {
        return new View('site.hello');
    }
    public function addRoom(Request $request): string
    {
        $roomtypes = Room_types::all();
        $roombuilding = Building::all();

        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'title' => ['required'], // Используйте 'title', если это имя вашего поля в форме
                'square' => ['required', 'numeric'],
                'places' => ['required', 'numeric'],
                'building_id' => ['required', 'numeric'],
                'room_types_id' => ['required', 'numeric'],
                // добавьте другие поля для валидации здесь
            ], [
                'required' => 'Поле :field обязательно для заполнения',
                'numeric' => 'Поле :field должно быть числом',
                'places' => 'Поле :field должно быть числом',
                // добавьте другие сообщения об ошибках здесь
            ]);

            if ($validator->fails()) {
                return new View(
                    'site.add_room',
                    ['roomtypes' => $roomtypes, 'roombuilding' => $roombuilding, 'errors' => $validator->errors()]
                );
            }

            if (Rooms::create($request->all())) {
                app()->route->redirect('/hello');
            }
        }
        return new View('site.add_room', ['roomtypes' => $roomtypes, 'roombuilding' => $roombuilding]);
    }

    public function add_buildings(Request $request): string
    {
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'address' => ['required'],
            ], [
                'required' => 'Поле :field обязательно для заполнения',
            ]);

            if ($validator->fails()) {
                return new View(
                    'site.add_buildings',
                    ['errors' => $validator->errors()]
                );
            }

            if (Building::create($request->all())) {
                app()->route->redirect('/hello');
            }
        }
        return new View('site.add_buildings');
    }

    public function count_total_area_by_institution(Request $request): string
    {
        $totalArea = 0;
        $rooms = Rooms::where('room_types_id', 1)->get();
        foreach ($rooms as $room) {
            $totalArea += $room->square;
        }

        return new View('site.count_total_area_by_institution', ['totalArea' => $totalArea]);
    }

    public function count_total_area_by_buildings(Request $request): string
    {
        $roombuilding = Building::all();
        $totalArea = 0;

        if (!empty($_GET['building_id'])) {
            $build_id = $_GET['building_id'];
            $rooms = Rooms::where('building_id', $build_id)->where('room_types_id', 1)->get();
            foreach ($rooms as $room) {
                $totalArea += $room->square;
            }
        }

        return new View('site.count_total_area_by_buildings', ['roombuilding' => $roombuilding, 'totalArea' => $totalArea]);
    }


    public function select_room_numbers_by_buildings(Request $request): string
    {
        $roombuilding = Building::all();
        $rooms = [];

        if (!empty($_GET['building_id'])) {
            $build_id = $_GET['building_id'];
            $rooms = Rooms::where('building_id', $build_id)->get();
        }

        return new View('site.select_room_numbers_by_buildings', ['roombuilding' => $roombuilding, 'rooms' => $rooms]);
    }

    public function signup(Request $request): string
    {
        // Проверяем, залогинен ли пользователь и имеет ли он role_id = 2
        if (Auth::check() && Auth::user()->role_id == 2) {
            app()->route->redirect('/warning');
        }

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if ($validator->fails()) {
                return new View(
                    'site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]
                );
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

    public function warning_role(): string
    {
        return new View('site.warning_role');
    }
}








