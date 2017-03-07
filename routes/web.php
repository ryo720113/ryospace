<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//use Auth;


Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);

// 認證路由
Route::auth();

//首頁
Route::get('/home', 'HomeController@index');

//FB登入
Route::get('/redirect', 'SocialAuthController@redirectToProvider');
Route::get('/callback', 'SocialAuthController@handleProviderCallback');

//文章專區
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}' , ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('/posts/{id}/edit',['as' => 'posts.edit', 'uses' => 'PostsController@edit']);
Route::post('/posts/store', 'PostsController@store');
Route::patch('/posts/{id}', 'PostsController@update');
Route::delete('/posts/{id}', 'PostsController@destroy');
Route::post('/posts/{id}/comment', 'PostsController@comment');

//細懸浮指標
Route::get('/open/pm', 'PmController@index');
Route::get('/open/psi', 'PsiController@index');


//admin專區
Route::group(['middleware'=>['auth','admin']], function(){

	Route::get('/admin', function(){
		return '這頁需要管理人員權限';
	});
	
});