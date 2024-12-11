<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\employee_controller;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});
// crud operations
Route::view('home','user_detail');
Route::post('home', [user_controller::class, 'show']);
Route::get('about', [user_controller::class, 'detail']);
Route::get('delete/{id}', [user_controller::class, 'delete']);
Route::get('update/{id}', [user_controller::class, 'update']);
Route::post('update_data/{id}', [user_controller::class, 'update_data']);

// addproduct  category and brand 
Route::view('category','category');
Route::post('category', [product_controller::class, 'add_category']);
Route::view('brand','brand');
Route::post('brand', [product_controller::class,'add_brand']);
Route::get('add', [product_controller::class, 'select_category']);
Route::post('add', [product_controller::class, 'save_products']);

//jobs
Route::get('deleteByJob', [employee_controller::class, 'deleteUserByJob'])->name("deleteByJob");


// datatables
Route::get('employee', [employee_controller::class, 'show'])->name('employee');
Route::get('curl', [UserController::class, 'curl'])->name('curl');
// curl
// crud operation routes
Route::get('deletedata/{id}', [employee_controller::class, 'delete']);
Route::get('updatedata/{id}', [employee_controller::class, 'update']);
Route::post('updatedata_employee/{id}', [employee_controller::class, 'update_data']);

// relationship 
Route::get('member', [employee_controller::class, 'detail']);
Route::get('company', [employee_controller::class, 'relation']);
Route::get('comment', [employee_controller::class, 'records']);

// for send email
Route::get('email', [EmailController::class, 'send_email']);

// send email to multiple user through queue
Route::get('sendemails', [EmailController::class, 'multiple_emails']);

