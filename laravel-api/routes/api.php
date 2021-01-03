<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
 * 
 * 
 * Para que funcione todo, dentro del proyecto en consola:
 * php artisan migrate     --> Comando que crea las tablas definidas en database/migrations
 * 
 * php artisan db:seed --class=ArticlesTableSeeder
 * php artisan db:seed --class=UsersTableSeeder
 * 
 * Estos comandos anteriores rellenan la base de datos (ver archivo .env).
 * 
 * Finalmente, en modo consola:
 * php artisan serve
 * Esto habilita el servicio web en la ruta: http://localhost:8000/api/articles/
 * 
 * Para más información: https://www.netireki.eus/crear-rest-api-con-laravel-step-1
 * 
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');
