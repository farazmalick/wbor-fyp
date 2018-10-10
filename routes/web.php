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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/////////////////////////////////////////////


    Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
    Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('users.logout');
/////////////////////////////////////////
Route::group(['middleware'=>'auth:admin'],function ()
{
Route::resource('admin/restaurants', 'AdminRestaurantsController',['names'=>[


    'index'=>'admin.restaurants.index',
    'create'=>'admin.restaurants.create',
    'store'=>'admin.restaurants.store',
    'edit'=>'admin.restaurants.edit'
]]);

});




