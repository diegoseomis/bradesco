<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cities',[CityController::class,'index']);

Route::get ('/cities/country/{countryCode}', [CityController::class, 'byCountry']);

Route::get('/cities/create', [CityController::class, 'create']);

Route::post('/cities', [CityController::class, 'store']);

Route::delete('/cities/{id}', [CityController::class, 'destroy'])->whereNumber('id');