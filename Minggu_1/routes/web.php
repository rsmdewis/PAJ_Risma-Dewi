<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/servis', function () {
    return view('servis');
});
Route::get('/about', function () {
    return view('about');
});


// Route::get('/user', 'UserController@index');
// Route::get('/user', UserController::class, 'index');
// Route::match(['get', 'post'], '/', function(){

// });
// Route::any('/', function(){

// });

// Route::get($url, $callback);
// Route::post($url, $callback);
// Route::put($url, $callback);
// Route::patch($url, $callback);
// Route::delete($url, $callback);
// Route::options($url, $callback);
// <form method="POST" action="/profile">
// @csrf
// </form>
// Route::redirect('/here', '/there', 301);
// Route::permanentRedirect('/here', '/there');
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Route::get('user/{id}', function ($id) {
//     return 'User'.$id;
// });

// $url = route('profile');
// return redirect()->route('profile');
// Route::get('user/{id}/profile', function ($id) {
// })->name('profile');
// $url = route('profile', ['id' => 1]);
// Route::get('user/{id}/profile', function ($id) {
// })->name('profile');
// $url = route('profile', ['id' => 1, 'photos' => 'yes']);

// Route::get('/vote', [VoteController::class, 'vote']->middleware('checkage'));