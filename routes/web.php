<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;

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
    UserController
};

/*
|--------------------------------------------------------------------------
| Utility Route (DEV ONLY)
|--------------------------------------------------------------------------
*/

// CHANGED: protect this route (very dangerous in production)
Route::get("clear", function () {
    abort_if(!app()->environment('local'), 403); // CHANGED

    Artisan::call('optimize:clear'); // CHANGED (simplified)
    return "Cache cleared";
});

/*
|--------------------------------------------------------------------------
| Helper Function
|--------------------------------------------------------------------------
*/

// CHANGED: safer helper (optional - better moved to helper file)
if (!function_exists('set_active')) {
    function set_active($route)
    {
        return request()->routeIs($route) ? 'active' : ''; // CHANGED
    }
}

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// CHANGED: grouped frontend routes
Route::controller(FrontendController::class)->group(function () {

    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/faq', 'faq')->name('faq');

    // Policies
    Route::get('/policy-and-procedure', 'policyAndProcedure')->name('policyAndProcedure');
    Route::get('/complaints-and-appeals-policy', 'complaintsAndAppealsPolicy')->name('complaintsAndAppealsPolicy');
    Route::get('/learning-resources-policy', 'learningResourcesPolicy')->name('learningResourcesPolicy');
    Route::get('/reassessment-policy', 'reassessmentPolicy')->name('reassessmentPolicy');
    Route::get('/schedule-of-administrative-fees', 'scheduleOfAdministrativeFees')->name('scheduleOfAdministrativeFees');
    Route::get('/refund-cancellation-policy', 'refundCancellationPolicy')->name('refundCancellationPolicy');

    // Courses
    Route::get('/course-list', 'courseList')->name('course.list');
    Route::get('/course/{id}', 'singleCourse')->name('single.course');
    Route::get('/category/{id}', 'singleCategory')->name('single.category');

    Route::get('/course-details', 'courseDetails')->name('course.details');

    // Enrollment
    Route::get('/enrolment', 'enrolment')->name('enrolment'); // CHANGED (duplicate removed)

    Route::get('/work-placement', 'workPlacement')->name('workPlacement');
    Route::get('/application', 'application')->name('application');
    Route::post('/application', 'store')->name('application.store');

    // Categories
    Route::get('individual-support', 'individualSupport')->name('individualSupport');
    Route::get('ageing-support', 'ageingSupport')->name('ageingSupport');
    Route::get('disability-support', 'disabilitySupport')->name('disabilitySupport');
    Route::get('community-service', 'communityService')->name('communityService');
    Route::get('community-services', 'communityServices')->name('communityServices');

    Route::get('cardiopulmonary-resuscitation', 'cardiopulmonaryResuscitation')->name('cardiopulmonaryResuscitation');
    Route::get('first-aid-cpr', 'firstAidCpr')->name('firstAidCpr');
    Route::get('leadership-management', 'leadershipManagement')->name('leadershipManagement');
    Route::get('project-management', 'projectManagement')->name('projectManagement');

    // Fast Track
    Route::get('/fast-track-qualifications', 'fast_track_qualifications')->name('fast-track-qualifications');
});


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

// CHANGED: grouped auth
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'storeUser')->name('register.store');
});


/*
|--------------------------------------------------------------------------
| Dynamic Pages
|--------------------------------------------------------------------------
*/

// CHANGED: cleaner slug handling
Route::get('/fast-track/{slug}', function ($slug) {

    $view = "meta-service.pages.fast-track.$slug";

    abort_unless(view()->exists($view), 404); // CHANGED

    return view($view);
});


/*
|--------------------------------------------------------------------------
| Forms
|--------------------------------------------------------------------------
*/

Route::post('/check-eligibility', [RplLeadController::class, 'store'])->name('check-eligibility.store');
Route::post('/qualification-lead', [QualificationsLeadController::class, 'store'])->name('qualification-lead.store');
Route::post('/fast-track/{slug}', [QualificationsLeadController::class, 'singleCourseStore'])->name('single-course-store');


/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    // CHANGED: simplified resource routes
    Route::resources([
        'users' => UserController::class,
        'reviews' => ReviewController::class,
        'courses' => CourseController::class,
        'categories' => CategoryController::class,
        'settings' => SettingController::class,
        'contacts' => ContactController::class,
        'seo-meta' => \App\Http\Controllers\SeoMetaController::class,
        'rpl-lead' => RplLeadController::class,
        'qualification-lead' => QualificationsLeadController::class,
    ]);
});