<?php

use Illuminate\Support\Facades\Route;

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
//default web
Route::get('/', function () {
    return view('index');
});
Route::get('/admin', 'Add_Produk@show');
// mengambil login from dari view data
Route:: get('/login', 'login@index');
// mengambil method post login 
Route:: post('/login/proses', 'login@Data');
// mengambil view  admin
// Route:: get('/admin', function(){
//     return view('admin');
// });
Route:: get('/add', 'Add_Produk@index');
Route:: post('/add/proses', 'Add_Produk@store');