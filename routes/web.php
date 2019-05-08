<?php

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

/*Route::get("/db", function () {
    try{
		DB::connection()->getPdo();
	}catch(\Exception $e){
		die("Could not " . $e);
	}
});*/

/*Route::group(["prefix"=> 'admin'], function(){
	Route::get("/name/{name?}", function($name = "Por defecto"){
		return env('APP_KEY');
	})->where('name', '[A-Za-z]+');
});*/


/*Route::get('/view', function(){
	$numero= 1;
	return view('view', compact("numero"));
});*/

//Route::view('/vista', 'vue');

/*Route::get('/users', function(){
	dd(App\User::with(['posts'])->first());
});*/

//use Illuminate\Support\Facades\DB;


/*Route::get('/query', function(){
	$users = DB::table('users')
	->join('posts', 'users.id', 'posts.user_id')
	->select('users.id', 'users.name', 'posts.title', 'posts.content')
	->get();
	dd($users);
});*/

//Route::resource('posts', 'PostController');

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'verified'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('posts', 'PostController');
	Route::get('/my/posts', 'PostController@myPosts')->name('posts.my');
});


Route::get('/', function(){
	return view('welcome');
})->middleware('language');

Route::get('/paypal', function(){
	return Payment::doSomething();
});

use App\Jobs\UserEmailWelcome;

Route::get('/mail', function(){
	UserEmailWelcome::dispatch(App\User::find(1));
	return "Done";
});