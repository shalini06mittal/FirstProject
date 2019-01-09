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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
     // $secret = encrypt('shalini');
     // return view('welcome',['title'=>'Laravel Template Engine',
     // 'secret'=>$secret]);
      phpinfo();
})->name('index');


//Route::get('/', 'PagesController@index');
Route::view('about','about')->name('ab');
//Route::get('about', 'PagesController@about')->name('ab');
Route::get('services', 'PagesController@services');
// Route::prefix('admin')->group(function(){
//      Route::get('', function(){
//           return "posts ";
//      });
//      Route::get('post/{id?}', function($id){
//           return "single post for id ".$id;
//      });
//      Route::post('create', function(\Illuminate\Http\Request $req){
//           return " post created ".$req->path() ;
//      });
//      Route::put('edit', function(){
//           return " post edit " ;
//      });
// });

Route::resource('posts','PostsController');
// Route::get('/user', function () {
//     return "<h1>Welcome There</h1>";
// });
// Route::get('/about', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
