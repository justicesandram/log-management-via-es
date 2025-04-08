<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleController;

Route::get(uri: '/', action: function () {
    return view('welcome');
});
Route::get('/greet/{name}', [SimpleController::class, 'greet']);