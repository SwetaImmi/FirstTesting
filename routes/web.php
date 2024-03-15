<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('data_edit/{id}',[UserController::class,'edit']);
Route::get('/',[ProductController::class,'index']);
Route::get('/product_form',[ProductController::class,'view_prdt']);
Route::post('/product',[ProductController::class,'create']);
Route::get('/product_table',[ProductController::class,'show']);
Route::get('/update_product/{id}',[ProductController::class,'edit']);
Route::get('/login',[UserController::class,'index']);
Route::get('/signin',[UserController::class,'show']);
Route::post('signin/post',[UserController::class,'create']);
Route::post('login/dash',[UserController::class,'authenticate']);
Route::get('data_delete/{id}',[ProductController::class,'destroy']);
Route::get('data_deletes/{id}',[UserController::class,'data_delete']);
// Route::view('chart','static.charts');
// Route::view('login','static.login');
// Route::view('signin','static.signIn');
// // Route::view('cards','static.product_table');
// Route::view('forms','static.ui-forms');
// Route::view('profile','static.pages-profile');
// Route::view('icons','static.icons');

// Route::get('/',[ProductController::class,'index']);



Route::group(['middleware' => ['auth','role']], function() {
    // your routes
    
  
    Route::get('/table',[UserController::class,'table_data']);
    Route::post('/logout', [UserController::class,'logout'])->name('logout');
});

Route::get('/register',[UserController::class,'show']);
// Route::post('register/post',[UserController::class,'create']);
// Route::get('/table',[UserController::class,'table_data'])->name('login');
// Route::get('data_delete/{id}',[UserController::class,'data_delete']);
// Route::get('data_edit/{id}',[UserController::class,'edit']);
Route::post('register/update/{id}',[UserController::class,'update_data']);
// Route::get('login',[UserController::class,'login'])->name('login');
// Route::post('login/dash',[UserController::class,'authenticate']);


