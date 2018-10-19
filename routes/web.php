<?php
use App\Http\Middleware\AdminMiddleware;
use App\Admin;
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

Auth::routes();
Route::group(['middleware'=>'user'],function(){
	Route::get('/','HomePageController@index');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/viewpost/{id}','AddPostController@viewpost')->name('viewpost');
	Route::get('/addpost','AddPostController@index');
	Route::post('/savepost','AddPostController@addPost');
	Route::get('/mycontent','MyContentController@index');
	Route::get('viewmypost/{id}','MyContentController@viewpost');
	Route::get('/editpost/{id}','EditPostController@index');
	Route::post('/editedpost/{id}','EditPostController@editPost');
	Route::get('/deletepost/{id}','EditPostController@deletepost');
});
//admin
Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::get('/','AdminController@index')->name('admin.dashboard');
	Route::get('/login','Auth\AdminLoginController@showLogin')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/review_post','AdminController@reviewPost');
	Route::get('/member_profile','AdminController@memberProfile');

});

