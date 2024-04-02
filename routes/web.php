<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']) ->middleware('auth');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/add_room', [Controller\Site::class, 'addRoom'])->middleware('auth');
Route::add(['GET', 'POST'], '/add_buildings', [Controller\Site::class, 'add_buildings'])->middleware('auth');
Route::add('GET', '/count_seats_by_buildings', [Controller\Site::class, 'count_seats_by_buildings']);
Route::add('GET', '/count_total_area_by_institution', [Controller\Site::class, 'count_total_area_by_institution']);
Route::add('GET', '/count_total_area_by_buildings', [Controller\Site::class, 'count_total_area_by_buildings']);
Route::add('GET', '/select_room_numbers_by_buildings', [Controller\Site::class, 'select_room_numbers_by_buildings']);
Route::add('GET', '/search_buildings', [Controller\Site::class, 'search_buildings']);
Route::add('GET', '/warning', [Controller\Site::class, 'warning_role']);