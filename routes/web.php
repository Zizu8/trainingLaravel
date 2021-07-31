<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

/*
Route::get('/', function () {
    return view('Welcome');
});
*/



Route::get('/', 'App\Http\Controllers\PagesController@index');
//Route::get('/about', 'App\Http\Controllers\PagesController@about');
//Route::get('/services', 'App\Http\Controllers\PagesController@services');
//Route::get('/products', [PagesController::class, 'products'])->name('products');

Route::get('/posts', 'App\Http\Controllers\PagesController@posts');
Route::post('/posts', 'App\Http\Controllers\PagesController@store');
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PagesController@edit');
Route::put('/posts/{post}', 'App\Http\Controllers\PagesController@update');
Route::get('/posts/create', 'App\Http\Controllers\PagesController@create');
Route::delete('/posts/{post}', 'App\Http\Controllers\PagesController@destroy');



        //Mixed method
// Route::get('/products/{name}/{id}', 
//     [PagesController::class, 'show'])->where([
//         'name' => '[a-zA-Z]+',
//         'id' => '[0-9]+'
//     ]);

            //String mehtod
// Route::get('/products/{name}', 
//     [PagesController::class, 'show'])->where('name', '[a-zA-Z]+');

            //Integer method
// Route::get('/products/{name}', 
//     [PagesController::class, 'show'])->where('name', '[0-9]+');

/*
Route::get('/about', function () {
    return view('pages.about');
});
*/

/*
Route::get('/users', function(){
    return ['PHP', 'HTML', 'LARAVEL'];
});
*/

/*
Route::get('/people', function(){
    return response()->json([
        'name' => 'Ziyad',
        'course' => 'Learn Laravel'
    ]);
});
*/

/*
Route::get('/newSys', 'App\Http\Controllers\PagesController@index');
*/

/*
Route::get('/new', function(){
    return redirect('/');
});
*/

/*
Route::get('/employees', function () {
    return '<h1>Employees List</h1>';
});
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user ' .$name . ' with an id of ' .$id;
});
*/