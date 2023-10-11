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
Route::get('pages/downloadFiles', [PageController::class, 'downloadFiles']);
Route::get('pages/admission-form', [PageController::class, 'admission']);
Route::get('pages/showResult', [PageController::class, 'resultShow']);
Route::get('pages/login', [PageController::class, 'loginPage']);
Route::get('pages/adminLogin', [PageController::class, 'adminLogin']);
Route::get('pages/adminpanel', [PageController::class, 'adminPanel']);

//nav Dropwon 01 manu Route:: 
Route::get('webpages/about_institute', [PageController::class, 'aboutinstitute']);
Route::get('webpages/Mission_vission', [PageController::class, 'missionVission']);
Route::get('webpages/history', [PageController::class, 'history']);
Route::get('webpages/Citizen_charter', [PageController::class, 'citizenCharter']);
Route::get('webpages/teaching_permission', [PageController::class, 'teacherPermission']);
Route::get('webpages/mpo_info', [PageController::class, 'mpoInfo']);
Route::get('webpages/Infrastructure', [PageController::class, 'Infrastructure']);
Route::get('webpages/Yearly_working_plan', [PageController::class, 'yearlyPlan']);
Route::get('webpages/head_intro', [PageController::class, 'headMaster']);
Route::get('webpages/Contact_us', [PageController::class, 'contactUS']);


//nav Dropwon 02 manu Route:: 
Route::get('webpages/President_Message', [PageController::class, 'president']);
Route::get('webpages/message-from-head', [PageController::class, 'headMessage']);
Route::get('webpages/Managing_comittee', [PageController::class, 'managingComittee']);
Route::get('webpages/Chairman_list', [PageController::class, 'chairmanList']);
Route::get('webpages/Principle_list', [PageController::class, 'principle']);
Route::get('webpages/Donars_list', [PageController::class, 'donarList']);
Route::get('webpages/Ex_member_list', [PageController::class, 'exDonars']);



//nav Dropwon 03 manu Route:: 
Route::get('webpages/Teacher_info', [PageController::class, 'teacherspages']);
Route::get('webpages/Staff_info', [PageController::class, 'staffInfo']);



//nav Dropwon 04 manu Route:: 
Route::get('webpages/class_gender_based_education', [PageController::class, 'classGender']);
Route::get('webpages/cate_wise_approved_branch_info', [PageController::class, 'cateWise']);
Route::get('webpages/student_attendance', [PageController::class, 'attendance']);
Route::get('webpages/six_class_student_info', [PageController::class, 'classSix']);
Route::get('webpages/seven_class_student_info', [PageController::class, 'classSeven']);
Route::get('webpages/eight_class_student_info', [PageController::class, 'classEight']);
Route::get('webpages/nine_class_student_info', [PageController::class, 'classNine']);
Route::get('webpages/ten_class_student_info', [PageController::class, 'classTen']);


//nav Dropwon 05 manu Route:: 
Route::get('webpages/Holiday_list', [PageController::class, 'holiDay']);
Route::get('webpages/Academic_Calender', [PageController::class, 'academic']);
Route::get('webpages/Syllabus', [PageController::class, 'syllabas']);
Route::get('webpages/Rules_regulation', [PageController::class, 'rules']);
Route::get('webpages/Uniform', [PageController::class, 'uniform']);
Route::get('webpages/Fees', [PageController::class, 'fees']);
Route::get('webpages/Online_Classroutine', [PageController::class, 'onlineClassRutine']);


//nav Dropwon 06 manu Route:: 
Route::get('webpages/Sports', [PageController::class, 'sports']);
Route::get('webpages/Cultural_Activities', [PageController::class, 'culturalAvtivitis']);
Route::get('webpages/Scouts', [PageController::class, 'scoutes']);
Route::get('webpages/Red_Crescent', [PageController::class, 'redcresent']);
Route::get('webpages/Study_Tour', [PageController::class, 'tour']);
Route::get('webpages/Student_Cafinet', [PageController::class, 'stCafinent']);
Route::get('webpages/Debate', [PageController::class, 'debate']);
Route::get('webpages/Language_Club', [PageController::class, 'languageClub']);
Route::get('webpages/Science_Fair', [PageController::class, 'fair']);


//nav Dropwon 07 manu Route:: 
Route::get('webpages/Prospects', [PageController::class, 'prospects']);
Route::get('webpages/Admission_Rules', [PageController::class, 'admissionRules']);
Route::get('webpages/Admission_Question', [PageController::class, 'admissionQ']);
Route::get('webpages/Admission_Result', [PageController::class, 'admissionResult']);


//nav Dropwon 08 manu Route:: 
Route::get('webpages/Exam_rules', [PageController::class, 'examRules']);
Route::get('webpages/Exam_routine', [PageController::class, 'examRutines']);
Route::get('webpages/Suggestion', [PageController::class, 'examSuggestion']);
Route::get('webpages/showResult', [PageController::class, 'examOnlineResults']);


//nav Dropwon 09 manu Route:: 
Route::get('webpages/Photo_gallery', [PageController::class, 'gallary']);
Route::get('webpages/Video_gallery', [PageController::class, 'Videogallary']);
Route::get('webpages/Magazine', [PageController::class, 'magazine']);




//Index pages manu Route:: 
Route::get('webpages/Notices', [PageController::class, 'indexNotices']);




