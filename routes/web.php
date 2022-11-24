<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\Home\FaqController;
use App\Http\Controllers\Home\PersonalityQuizScoreController;
use App\Http\Controllers\Post\InfoZoneController;
use App\Http\Controllers\Home\StudentInfoController;

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
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){

    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'show']);
    Route::get('/user/{user_id}', [\App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('/update-user/{user_id}', [\App\Http\Controllers\Admin\UserController::class, 'update']);
    Route::get('/stdinfo', [\App\Http\Controllers\Admin\StudentInfoController::class, 'view']);

});

Route::view('login','auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[LoginController::class,'authenticate']);
Route::view('register','auth.register')->middleware('guest');
Route::post('save',[RegisterController::class,'save']);
Route::get('logout',[LoginController::class,'logout']);

Route::get('forgot-password',[ForgotPasswordController::class,'showForgotPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password',[ForgotPasswordController::class,'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}',[ForgotPasswordController::class,'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password',[ForgotPasswordController::class,'submitResetPasswordForm'])->name('reset.password.post');

Route::get('stdinfo',[StudentInfoController::class,'create'])->middleware('auth');
Route::post('/keep',[StudentInfoController::class,'keep']);
Route::get('home',[FaqController::class,'index'])->middleware('auth');
Route::get('infozone',[InfoZoneController::class, 'displayinfozone'])->middleware('auth');
Route::view('detailpersonality','post.details.infodetailspersonality')->middleware('auth');
Route::view('detailcyberthreats','post.details.infodetailscyberthreat')->middleware('auth');
Route::view('detailhelpline','post.details.infodetailshelpline')->middleware('auth');
Route::view('cybermalware','home.cyberthreats.malware');
Route::view('cyberonlinescam','home.cyberthreats.onlinescam');
Route::view('cyberpassattack','home.cyberthreats.passattack');
Route::view('cyberpedophilia','home.cyberthreats.pedophilia');
Route::view('cyberbullying','home.cyberthreats.cyberbullying');
Route::get('quiz',[PersonalityQuizScoreController::class,'generate'])->middleware('auth');
Route::post('store',[PersonalityQuizScoreController::class,'store'])->middleware('auth');
Route::get('quizresult/{id}',[PersonalityQuizScoreController::class,'view'])->middleware('auth')->name('quizresult');


