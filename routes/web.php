<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// Controllers
use App\Http\Controllers\{
    Auth\LoginController,
    Auth\RegisterController,
    CategoryController,
    ContactController,
    CourseController,
    FrontendController,
    HomeController,
    QualificationsLeadController,
    SettingController,
    ReviewController,
    RplLeadController,
    SeoMetaController,
    UserController
};


Route::get("clear", function () {
    abort_if(!app()->environment('local'), 403); 

    Artisan::call('optimize:clear'); 
    return "Cache cleared";
});

if (!function_exists('set_active')) {
    function set_active($route)
    {
        return request()->routeIs($route) ? 'active' : ''; 
    }
}

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});

// CHANGED: grouped register
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'storeUser')->name('register.store');  
});

Route::middleware(['auth', 'student'])->group(function () {

    Route::get('/students/dashboard', [FrontendController::class, 'studentDashboard'])
        ->name('student.dashboard');

});

Route::middleware('auth')->group(function () {

    Route::get('profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class)->names('user');
    Route::resource('reviews', ReviewController::class)->names('review');
    Route::resource('courses', CourseController::class)->names('course');
    Route::resource('categories', CategoryController::class)->names('category');
    Route::resource('settings', SettingController::class)->names('setting');
    Route::resource('contacts', ContactController::class)->names('contact');
    Route::get('seo-meta/{seoMeta}/google-score', [SeoMetaController::class, 'googleScore'])
        ->name('seo-meta.google-score');
    Route::resource('seo-meta', \App\Http\Controllers\SeoMetaController::class)->names('seo-meta');
    Route::resource('rpl-lead', RplLeadController::class)->names('rpl-lead');
    Route::resource('qualification-lead', QualificationsLeadController::class)->names('qualification-lead');
    Route::resource('students', RegisterController::class)->names('student');
    
});


