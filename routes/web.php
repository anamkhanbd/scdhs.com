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

//nav Dropwon 01 manu Route:: 
Route::get('/webpages/about_institute', [PageController::class, 'aboutinstitute']);
Route::get('/webpages/Mission_vission', [PageController::class, 'missionVission']);
Route::get('/webpages/history', [PageController::class, 'history']);
Route::get('/webpages/Citizen_charter', [PageController::class, 'citizenCharter']);
Route::get('/webpages/teaching_permission', [PageController::class, 'teacherPermission']);
Route::get('/webpages/mpo_info', [PageController::class, 'mopInfo']);
Route::get('/webpages/Infrastructure', [PageController::class, 'Infrastructure']);
Route::get('/webpages/Yearly_working_plan', [PageController::class, 'yearlyPlan']);
Route::get('/webpages/head_intro', [PageController::class, 'headMaster']);
Route::get('/webpages/Contact_us', [PageController::class, 'contactUS']);


//nav Dropwon 02 manu Route:: 
Route::get('/webpages/President_Message', [PageController::class, 'president']);
Route::get('/webpages/message-from-head', [PageController::class, 'headMessage']);
Route::get('/webpages/Managing_comittee', [PageController::class, 'managingComittee']);
Route::get('/webpages/Chairman_list', [PageController::class, 'chairmanList']);
Route::get('/webpages/Principle_list', [PageController::class, 'principle']);













