<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'App\Http\Controllers\Controller@homePage'); //inserir a rota inteira para rodar o controller
Route::get('/cadastro', 'App\Http\Controllers\Controller@cadastro');


/*Route::get('/', function () {
    return view('welcome');
});
*/