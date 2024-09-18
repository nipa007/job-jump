<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\AdminController;

use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\CandidateController;




Route::get('/', [FrontController::class, 'homePage'])->name('home.page');

Route::get('/about-us', [FrontController::class,'aboutPage'])->name('about.us');
Route::get('/jobs', [FrontController::class,'jobPage'])->name('jobPage');
Route::get('/contact-us', [FrontController::class,'contactPage'])->name('contact.us');
Route::get('/loginPage', [AuthController::class,'loginPage'])->name('login');
Route::post('/login', [AuthController::class,'doLogin'])->name('do.login');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

Route::get('/admin/dashboard', [AdminController::class,'adminDashboard'])->name('admin.dashboard');

Route::get('/company/dashboard', [CompanyController::class,'companyDashboard'])->name('company.dashboard');
Route::get('/candidate/dashboard', [CandidateController::class,'candidateDashboard'])->name('candidate.dashboard');


Route::get('company/registerPage', [CompanyController::class, 'companyRegister'])->name('company.register');
Route::post('company/register', [CompanyController::class, 'companyDoRegister'])->name('company.do.register');

Route::get('candidate/registerPage', [CandidateController::class, 'candidateRegister'])->name('candidate.register');
Route::post('candidate/register', [CandidateController::class, 'candidateDoRegister'])->name('candidate.do.register');

//Candidate accounts settings
Route::get('account/{id}', [AuthController::class, 'account'])->name('account');
Route::post('account/{id}/update', [AuthController::class, 'accountUpdate'])->name('account.update');


//Candidate Profile/CV
// Route::get('candiate/cv', [CandidateController::class, 'createCv'])->name('candidate.cv.create');
// Route::post('candiate/cv/store', [CandidateController::class, 'storeCv'])->name('candidate.cv.store');

Route::get('candidate/personal-info', [CandidateController::class, 'personalInfo'])->name('personal.info');
Route::post('candidate/personal-info/store', [CandidateController::class, 'personalInfoStore'])->name('personal.info.store');
Route::get('candidate/personal-info/edit/{id}', [CandidateController::class, 'personalInfoEdit'])->name('personal.info.edit');
Route::post('candidate/personal-info/{id}/update', [CandidateController::class, 'personalInfoUpdate'])->name('personal.info.update');

Route::get('candidate/education', [CandidateController::class, 'educationCreate'])->name('create.education');
Route::post('candidate/education/store', [CandidateController::class, 'educationStore'])->name('education.store');
Route::get('candidate/education/edit/{id}', [CandidateController::class, 'educationEdit'])->name('education.edit');
Route::post('candidate/education/{id}/update', [CandidateController::class, 'educationUpdate'])->name('education.update');





