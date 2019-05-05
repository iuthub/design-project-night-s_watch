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
// Route::group(['middleware'=>'web'],function (){

// 	// Route::match(['post','get'],'/',['uses'=>'IndexController@execute','as'=>'home']);

// 	Route::match(['post','get'],'/',function (){
// 		return view('index');
// 	});
	


// });
Route::get('/',['uses'=>'IndexController@execute','as'=>'index']);

// Route::resource('/menus','MenusController',['only'=>['index']);


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){

	Route::get('/',function (){

		$foods = DB::select("SELECT * FROM `menus`");
		$columns = Schema::getColumnListing('menus');

		return view('admin.index')->with(['foods'=>$foods,'columns'=>$columns]);

	})->name('admin');

});

Route::match(['post','get'],'/menus/add',['uses'=>'MenusAddController@execute','as'=>'menusAdd']);
Route::match(['post','get','delete'],'/menus/edit/{menu}',['uses'=>'MenusEditController@execute','as'=>'menusEdit']);

Route::get('/menu',['uses'=>'MenusController@execute','as'=>'menu']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
