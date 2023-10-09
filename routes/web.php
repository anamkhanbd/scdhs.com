<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'home']);
Route::get('/pages/downloadFiles', [PageController::class, 'downloadFiles']);
Route::get('/pages/admission-form', [PageController::class, 'admission']);
Route::get('/pages/showResult', [PageController::class, 'resultShow']);
Route::get('/pages/login', [PageController::class, 'loginPage']);
Route::get('/pages/adminLogin', [PageController::class, 'adminLogin']);
Route::get('/pages/adminpanel', [PageController::class, 'adminPanel']);

//nav Dropwon manu Route:: 
Route::get('/webpages/about_institute', [PageController::class, 'aboutinstitute']);





