<?php

use App\Http\Controllers\InvestorController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/investor',[InvestorController::class, 'index']);
Route::post('/investor', [InvestorController::class, 'store']);
Route::get('/investor/{investor}', [InvestorController::class,'view']);
Route::get('/investor/edit/{investor}',[InvestorController::class,'edit']);
Route::put('/investor/{investor}',[InvestorController::class, 'update']);
Route::delete('/investor/{investor}', [InvestorController::class, 'destroy']);
Route::get('/investor/confirm-delete/{investor}',[InvestorController::class, 'delete']);




