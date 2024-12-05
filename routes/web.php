<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\employee_controller;

Route::get('/', function () {
    return view('welcome');
});
Route::view('home','user_detail');
Route::post('home', [user_controller::class, 'show']);
Route::get('about', [user_controller::class, 'detail']);

Route::get('delete/{id}', [user_controller::class, 'delete']);
Route::get('update/{id}', [user_controller::class, 'update']);
Route::post('update_data/{id}', [user_controller::class, 'update_data']);


Route::view('category','category');
Route::post('category', [product_controller::class, 'add_category']);
Route::view('brand','brand');
Route::post('brand', [product_controller::class,'add_brand']);

Route::get('add', [product_controller::class, 'select_category']);
Route::post('add', [product_controller::class, 'save_products']);


Route::get('employee', [employee_controller::class, 'show'])->name('employee');

Route::get('deletedata/{id}', [employee_controller::class, 'delete']);
Route::get('updatedata/{id}', [employee_controller::class, 'update']);
Route::post('updatedata_employee/{id}', [employee_controller::class, 'update_data']);


Route::get('member', [employee_controller::class, 'detail']);
Route::get('company', [employee_controller::class, 'relation']);
Route::get('comment', [employee_controller::class, 'records']);



