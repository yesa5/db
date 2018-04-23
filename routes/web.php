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

Route::get('/', 'UserController@index')->name('index');
Route::get('/user_form/{id}', 'UserController@user_form')->name('form');
Route::post('/list', 'UserController@list')->name('list');
Route::post('/processAddBooking', 'UserController@processAddBooking')->name('processAddBooking');
Route::post('/processAddEmployee', 'UserController@processAddEmp')->name('processAddEmp');
Route::get('/ajax-subcat', function (){
    $type = Input::get('type');
    $rooms =  \App\Room::where('type',$type)->get();
    return \Illuminate\Http\Resources\Json\Resource::json($rooms);
});
