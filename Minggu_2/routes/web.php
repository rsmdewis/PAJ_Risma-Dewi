<?php
// routes/web.php
use Illuminate\Support\Facades\Route;

// Menggunakan controller VoterController
use App\Http\Controllers\VoterController; 
use App\Http\Controllers\SubjectController; // Menggunakan controller SubjectController
use App\Http\Controllers\UserController; // Menggunakan controller UserController

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



Route::get('/student', [UserController::class, 'student']); // Route untuk menampilkan daftar student
Route::get('/teacher', [UserController::class, 'teacher']); // Route untuk menampilkan daftar teacher
Route::get('/admin', [UserController::class, 'admin']); // Route untuk menampilkan daftar admin

Route::get('/nct127', [SubjectController::class, 'nct127']); // Route untuk menampilkan daftar nct 127
Route::get('/nctDream', [SubjectController::class, 'nctDream']); // Route untuk menampilkan daftar nct dream
Route::get('/wayv', [SubjectController::class, 'wayV']); // Route untuk menampilkan daftar wayv

// Route untuk menampilkan daftar voter
Route::get('/voter', [VoterController::class, 'viewVoter']); 


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/servis', function () {
//     return view('servis');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/voter', [VoterController::class, 'viewVoter']);
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