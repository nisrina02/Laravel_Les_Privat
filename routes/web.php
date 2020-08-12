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

Route::get('/interface', 'halut@index');
Route::get('/dash', 'Dashboard@index');
Route::get('/dashmurid', 'Dashmurid@index');
Route::get('/dashguru', 'Dashguru@index');
route::post('/logout1', 'login1@logout');

route::get('login1', 'Login1@index');
route::post('login1/cek', 'Login1@cek');
route::get('/logout1', 'login1@logout');

route::get('login2', 'Login2@index');
route::post('login2/cek', 'Login2@cek');
route::get('/logout2', 'login2@logout');

route::get('login3', 'Login3@index');
route::post('login3/cek', 'Login3@cek');
route::get('/logout3', 'login3@logout');

route::resource('/murid', 'Murid');
route::resource('/admin', 'Admin');
route::resource('/guru', 'Guru');
route::resource('/mapel', 'Mapel');
route::resource('/detailles', 'Detailles');

route::get('/kursus', 'kursus@index');
