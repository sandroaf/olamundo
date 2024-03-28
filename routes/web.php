<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreController;
use PSpell\Config;

Route::get('/', function () {
    return view('home', array("title"=>'Exemplo Laravel'));
});

Route::resource('/sobre', SobreController::class);
Route::resource('/contato', ContatoController::class);

