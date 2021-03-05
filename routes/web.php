<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\SampleFormController;

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

Route::get('/form',[SampleFormController::class,'show'])->name("form.show");
Route::post('/form', [SampleFormController::class,'post'])->name("form.post");

Route::get('/confirm', [SampleFormController::class,'confirm'])->name("form.confirm");
Route::post('/confirm', [SampleFormController::class,'send'])->name("form.send");

Route::get('/thanks', [SampleFormController::class,'complete'])->name("form.complete");
