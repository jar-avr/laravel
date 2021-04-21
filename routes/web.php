<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistration;

Route::get('/', function () {return view('welcome');});
Route::get('/user/{id}/{name}', [UserRegistration::class, 'param']);
Route::get('/register', [UserRegistration::class, 'register']);

Route::post('/greeting', [UserRegistration::class, 'postRegister']);
Route::post('/showId/{id}', function ($id) {return view('showId', ['id' => $id]);});
Route::post('/showAll', [UserRegistration::class, 'showAll']);
