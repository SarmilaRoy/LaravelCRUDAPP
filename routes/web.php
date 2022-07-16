<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/',[CrudController::class,'showData']);
Route::get('/add-data',[CrudController::class,'addData']);
//add data
Route::post('/store-data',[CrudController::class,'storeData']);
//Edit data display
Route::get('/edit-data/{id}',[CrudController::class,'editData']);
//edit data
Route::post('/updatedata/{id}',[CrudController::class,'updateData']);
//delete
Route::get('/delete-data/{id}',[CrudController::class,'deleteData']);

