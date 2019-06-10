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

route::resource('category','CategoryController');
route::resource('project','ProjectController');
route::resource('projectassign','ProjectassignController');
route::resource('catagoryassign','CatagoryassignController');
route::get('dindex','CategoryController@dindex');
route::get('usert','CategoryController@usert');

route::get('allusers','UserController@data');
route::get('showusers/{id}','UserController@show');
route::resource('projectdetail','ProjectdetailController');
route::get('projectdetails/{id}','ProjectdetailController@view');
route::get('project_details/{id}','ProjectdetailController@view2');



Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
});

    Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'CategoryController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/dindex', 'CategoryController@dindex')->name('dindex');
});

    Route::middleware(['admin'])->group(function () {
    Route::get('/users', 'UserController@index')->name('admin.users.index');
    Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
    });

});

});

//Route::get('/home', 'HomeController@index')->name('home');
route::get('logout','CategoryController@logout');

route::GET('customer/home','CustomerController@index');       
route::GET('customer','customer\LoginController@showLoginForm')->name('customer.login');
route::POST('customer','customer\LoginController@login');                       
route::POST('customer-password/email','customer\ForgotPasswordController@sendResetLinkEmail')->name('customer.password.email');  
route::GET('customer-password/reset','customer\ForgotPasswordController@showLinkRequestForm')->name('customer.password.request');
route::POST('customer-password/reset','customer\ResetPasswordController@reset')->name('customer.password.update');           
route::GET('customer.password/reset/{token}','customer\ResetPasswordController@showResetForm')->name('customer.password.reset'); 
route::get('projectshowcasing','ProjectshowcasingController@main');
route::get('customer/message','ProjectshowcasingController@message');
route::get('logout1','ProjectshowcasingController@logout1');
