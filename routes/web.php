<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use PSpell\Config;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/contato', ContatoController::class);
