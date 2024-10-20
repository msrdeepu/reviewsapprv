<?php

use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SuperadminController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ChildcategoryController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [SuperadminController::class, 'dashboard'])->name('sadmin.dashboard');

// profile routes

Route::get('profile', [ProfileController::class, 'index'])->name('sadmin.profile');
Route::post('profile', [ProfileController::class, 'updateprofile'])->name('sadmin.updateprofile');
Route::post('profile/update/password', [ProfileController::class, 'updatepassword'])->name('sadmin.updatepassword');
Route::resource('settings', SettingController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('category', CategoryController::class);
Route::resource('subcategory', SubcategoryController::class);
Route::resource('childcategory', ChildcategoryController::class);
Route::resource('quiz', QuizController::class);
Route::resource('question', QuestionController::class);
Route::resource('page', PageController::class);
Route::resource('post', PostController::class);

//add questions view
Route::get('newquestion/{id}', [QuizController::class, 'addquestion'])->name('quiz.newquestion');
Route::get('viewquestion/{id}', [QuestionController::class, 'viewquestion'])->name('quiz.viewuestion');
