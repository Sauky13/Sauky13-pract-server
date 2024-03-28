<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/add_rooms', [Controller\Site::class, 'add_rooms']);
Route::add('GET', '/add_buildings', [Controller\Site::class, 'add_buildings']);
Route::add('GET', '/count_seats_by_buildings', [Controller\Site::class, 'count_seats_by_buildings']);