<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

// Route::get('/clie', function () {
//     return view('welcome');
// });

// show whole table data
Route::get('/',[ClientController::class,'showclient'])->name('home');

// showing single client data by id
Route::get('/client/{id}',[ClientController::class,'singleclient'])->name('single.client');

// adding new client
Route::post('/addclient',[ClientController::class,'addclient'])->name('add.client');

// updating clinets data by hitnng id
Route::get('/update/{id}',[ClientController::class,'updatepage'])->name('update.page');
Route::post('/updateuser/{id}',[ClientController::class,'updateuser'])->name('update.user');
// delete user by hiting his id
Route::get('/delete/{id}',[ClientController::class,'Deleteuser'])->name('Delete.user');
 


// movingtowards form page
Route::view('newuser','/Addclient');
