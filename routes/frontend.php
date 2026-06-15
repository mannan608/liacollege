<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

// Controllers
use App\Http\Controllers\{
    FrontendController,
    QualificationsLeadController,
    RplLeadController,
    UserController
};


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

    // Enrollment
    Route::get('/enrolment', 'enrolment')->name('enrolment'); 

    Route::get('/work-placement', 'workPlacement')->name('workPlacement');

    // Application
    Route::get('/application', 'application')->name('application');
    Route::post('/application', 'store')->name('application.store');

    // single Course pages
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


Route::get("route-list", [FrontendController::class, "route_list"]);

