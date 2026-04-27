<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadRplController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get("clear", function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    return "Cache cleared";
});

if (! function_exists('set_active')) {
    function set_active($route)
    {
        if (is_array($route)) {
            return in_array(Request::path(), $route) ? 'active' : '';
        }
        return Request::path() === $route ? 'active' : '';
    }
}

Route::get('/course-list', [FrontendController::class, 'courseList'])->name('course.list');
Route::get('/category/{id}', [FrontendController::class, 'singleCategory'])->name('single.category');
Route::get('/course/{id}', [FrontendController::class, 'singleCourse'])->name('single.course');

// ---------------------- Login / Register ----------------------
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('change/password', [LoginController::class, 'changePassword'])->name('change/password');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'storeUser'])->name('register.store');

// ---------------------- Frontend Routes ----------------------
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/policy-and-procedure', [FrontendController::class, 'policyAndProcedure'])->name('policyAndProcedure');
Route::get('/complaints-and-appeals-policy', [FrontendController::class, 'complaintsAndAppealsPolicy'])->name('complaintsAndAppealsPolicy');
Route::get('/learning-resources-policy', [FrontendController::class, 'learningResourcesPolicy'])->name('learningResourcesPolicy');
Route::get('/reassessment-policy', [FrontendController::class, 'reassessmentPolicy'])->name('reassessmentPolicy');
Route::get('/schedule-of-administrative-fees', [FrontendController::class, 'scheduleOfAdministrativeFees'])->name('scheduleOfAdministrativeFees');
Route::get('/refund-cancellation-policy', [FrontendController::class, 'refundCancellationPolicy'])->name('refundCancellationPolicy');
Route::get('/course-details', [FrontendController::class, 'courseDetails'])->name('course.details');
Route::get('/enrolment', [FrontendController::class, 'enrolment'])->name('enrolment');
Route::get('/enrolment', [FrontendController::class, 'enrolment'])->name('enrolment');
Route::get('/work-placement', [FrontendController::class, 'workPlacement'])->name('workPlacement');
Route::get('/application', [FrontendController::class, 'application'])->name('application');
Route::get('individual-support', [FrontendController::class, 'individualSupport'])->name('individualSupport');
Route::get('ageing-support', [FrontendController::class, 'ageingSupport'])->name('ageingSupport');
Route::get('disability-support', [FrontendController::class, 'disabilitySupport'])->name('disabilitySupport');
Route::get('community-service', [FrontendController::class, 'communityService'])->name('communityService');
Route::get('community-services', [FrontendController::class, 'communityServices'])->name('communityServices');
Route::get('cardiopulmonary-resuscitation', [FrontendController::class, 'cardiopulmonaryResuscitation'])->name('cardiopulmonaryResuscitation');
Route::get('first-aid-cpr', [FrontendController::class, 'firstAidCpr'])->name('firstAidCpr');
Route::get('leadership-management', [FrontendController::class, 'leadershipManagement'])->name('leadershipManagement');
Route::get('project-management', [FrontendController::class, 'projectManagement'])->name('projectManagement');
Route::post('/application', [FrontendController::class, 'store'])->name('application.store');


// ---------------------- User / Student / Teacher ----------------------
Route::match(['get', 'post'], 'user/password-reset', [UserController::class, 'password_reset'])->name('password.reset');
// ---------------------- Auth Routes ----------------------
Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('users', UserController::class, [
        'names' => [
            'index' => 'user.index',
            'create' => 'user.create',
            'store' => 'user.store',
            'show' => 'user.show',
            'edit' => 'user.edit',
            'update' => 'user.update',
        ]
    ]);
    
    Route::resource('reviews', ReviewController::class, [
        'names' => [
            'index' => 'review.index',
            'create' => 'review.create',
            'store' => 'review.store',
            'show' => 'review.show',
            'edit' => 'review.edit',
            'update' => 'review.update',
            'destroy' => 'review.destroy',
        ]
    ]);
    
    Route::resource('courses', CourseController::class, [
        'names' => [
            'index' => 'course.index',
            'create' => 'course.create',
            'store' => 'course.store',
            'show' => 'course.show',
            'edit' => 'course.edit',
            'update' => 'course.update',
            'destroy' => 'course.destroy',
        ]
    ]);
    
    Route::resource('categories', CategoryController::class, [
        'names' => [
            'index' => 'category.index',
            'create' => 'category.create',
            'store' => 'category.store',
            'show' => 'category.show',
            'edit' => 'category.edit',
            'update' => 'category.update',
            'destroy' => 'category.destroy',
        ]
    ]);
    
    Route::resource('settings', SettingController::class, [
        'names' => [
            'index' => 'setting.index',
            'create' => 'setting.create',
            'store' => 'setting.store',
            'show' => 'setting.show',
            'edit' => 'setting.edit',
            'update' => 'setting.update',
        ]
    ]);

    Route::resource('contacts', ContactController::class, [
        'names' => [
            'index' => 'contact.index',
            'create' => 'contact.create',
            'store' => 'contact.store',
            'show' => 'contact.show',
            'edit' => 'contact.edit',
            'update' => 'contact.update',
        ]
    ]);

    Route::resource('seo-meta', \App\Http\Controllers\SeoMetaController::class, [
        'names' => [
            'index' => 'seo-meta.index',
            'create' => 'seo-meta.create',
            'store' => 'seo-meta.store',
            'show' => 'seo-meta.show',
            'edit' => 'seo-meta.edit',
            'update' => 'seo-meta.update',
            'destroy' => 'seo-meta.destroy',
        ]
    ]);
});


Route::get('/meta-page', [LeadRplController::class, 'meta_page'])->name('meta-page');
Route::get('/meta-page/quiz/{step}', [LeadRplController::class, 'showMetaPageQuizStep'])->name('meta-page.quiz.step');
Route::post('/meta-page/quiz', [LeadRplController::class, 'storeMetaPageQuizAnswer'])->name('meta-page.quiz.store');
