<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//criando a rota para a pagina "home"

Route::get('/', [HomeController::class,'home']);
Route::get('/contato',[HomeController::class,'contato']);
