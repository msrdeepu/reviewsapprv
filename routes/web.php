<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\SuperadminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuizplayController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'home'])->name('main.home');
Route::get('/quizzes', [HomeController::class, 'allquizzes'])->name('main.allquizzes');
Route::get('/contact', [ContactController::class, 'newcontact'])->name('main.contact');
Route::post('/contact', [ContactController::class, 'createcontact'])->name('create.contact');
Route::get('/page/{slug}', [HomeController::class, 'frontpage'])->name('front.page');
Route::get('/category/{slug}', [QuizplayController::class, 'searchbycategory'])->name('quiz.categorysearch');
Route::get('/googleauth', [GoogleController::class, 'googleauth'])->name('googleauth');
Route::get('/googleauth/callback', [GoogleController::class, 'cllbackgoogleauth'])->name('cllbackgoogleauth');


//search routes
Route::get('/serchprofessors', [SearchController::class, 'searchprofessors'])->name('searchprofessors');


Route::get('/default/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('default.dashboard');




Route::middleware('auth')->group(function () {
    //Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [HomeController::class, 'home'])->name('dashboard');

    
    
    
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
    
    
    
    //play quiz
    Route::get('/quiz/{slug}', [QuizplayController::class, 'playview'])->name('quiz.playview');
    Route::post('/validate', [QuizplayController::class, 'validateAnswer'])->name('quiz.validateAnswer');
    Route::post('/results', [QuizplayController::class, 'viewresults'])->name('quiz.viewresults');
    Route::post('/feedback', [QuizplayController::class, 'feedback'])->name('quiz.feedback');

    
});



require __DIR__ . '/auth.php';


Route::get('/superadmin/login', [SuperadminController::class, 'login'])->name('superadmin.login');
