<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;
use App\Models\Course;

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

// CHANGED: prevent production misuse
Route::get("clear", function () {
    abort_if(!app()->environment('local'), 403); // CHANGED

    Artisan::call('optimize:clear'); // CHANGED (cleaner)
    return "Cache cleared";
});

/*
|--------------------------------------------------------------------------
| Helper (BETTER APPROACH)
|--------------------------------------------------------------------------
*/

// CHANGED: simplified helper (recommended to move to helpers.php)
if (!function_exists('set_active')) {
    function set_active($route)
    {
        return request()->routeIs($route) ? 'active' : ''; // CHANGED
    }
}

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

// CHANGED: grouped controller
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

    // Application
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

// CHANGED: grouped login
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

/*
|--------------------------------------------------------------------------
| Other Public Routes
|--------------------------------------------------------------------------
*/

Route::match(['get', 'post'], 'user/password-reset', [UserController::class, 'password_reset'])
    ->name('password.reset');

// CHANGED: safer slug handling
Route::get('/fast-track/{slug}', function ($slug) {
    $view = "meta-service.pages.fast-track.$slug";

    abort_unless(view()->exists($view), 404); // CHANGED

    return view($view);
});

/*
|--------------------------------------------------------------------------
| Form Submissions
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

    // CHANGED: cleaner but KEEPING your custom names
    Route::resource('users', UserController::class)->names('user');
    Route::resource('reviews', ReviewController::class)->names('review');
    Route::resource('courses', CourseController::class)->names('course');
    Route::resource('categories', CategoryController::class)->names('category');
    Route::resource('settings', SettingController::class)->names('setting');
    Route::resource('contacts', ContactController::class)->names('contact');
    Route::resource('seo-meta', \App\Http\Controllers\SeoMetaController::class)->names('seo-meta');
    Route::resource('rpl-lead', RplLeadController::class)->names('rpl-lead');
    Route::resource('qualification-lead', QualificationsLeadController::class)->names('qualification-lead');
});


// site map 


Route::get('/sitemap.xml', function () {

    $urls = [];

    /*
    |--------------------------------------------------------------------------
    | STATIC ROUTES
    |--------------------------------------------------------------------------
    */

    $staticRoutes = [
        '/',
        '/about',
        '/contact',
        '/faq',
        '/course-list',
        '/enrolment',
        '/application',
    ];

    foreach ($staticRoutes as $route) {
        $urls[] = [
            'loc' => url($route),
            'lastmod' => now()->toAtomString(),
            'changefreq' => 'weekly',
            'priority' => $route === '/' ? '1.0' : '0.8',
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | DYNAMIC COURSES
    |--------------------------------------------------------------------------
    */

    if (class_exists(Course::class)) {
        $courses = Course::select('id', 'updated_at')->get();

        foreach ($courses as $course) {
            $urls[] = [
                'loc' => url('/course/' . $course->id),
                'lastmod' => optional($course->updated_at)->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.9',
            ];
        }
    }

    /*
    |--------------------------------------------------------------------------
    | GENERATE XML
    |--------------------------------------------------------------------------
    */

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    foreach ($urls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . $url['loc'] . '</loc>';

        if (!empty($url['lastmod'])) {
            $xml .= '<lastmod>' . $url['lastmod'] . '</lastmod>';
        }

        $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
        $xml .= '<priority>' . $url['priority'] . '</priority>';
        $xml .= '</url>';
    }

    $xml .= '</urlset>';

    return Response::make($xml, 200, [
        'Content-Type' => 'application/xml',
    ]);
});