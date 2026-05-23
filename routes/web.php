<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| MAIN PAGES
|--------------------------------------------------------------------------
*/

Route::get('/why-led-media', [PageController::class, 'whyLed'])->name('why-led-media');
Route::get('/contact',       [PageController::class, 'contact'])->name('contact');
Route::get('/insights',      [PageController::class, 'insights'])->name('insights');
Route::get('/services',      [PageController::class, 'services'])->name('services.index');

/*
|--------------------------------------------------------------------------
| SOLUTIONS
|--------------------------------------------------------------------------
*/

Route::prefix('solutions')->name('solutions.')->group(function () {
    Route::get('/outdoor-billboards', [PageController::class, 'outdoorBillboards'])->name('outdoor-billboards');
    Route::get('/indoor-commercial',  [PageController::class, 'indoorCommercial'])->name('indoor-commercial');
    Route::get('/fine-pixel',         [PageController::class, 'finePixel'])->name('fine-pixel');
    Route::get('/meeting-room',       [PageController::class, 'meetingRoom'])->name('meeting-room');
    Route::get('/retail',             [PageController::class, 'retail'])->name('retail');
    Route::get('/control-systems',    [PageController::class, 'controlSystems'])->name('control-systems');
    Route::get('/installation',       [PageController::class, 'installation'])->name('installation');
});

/*
|--------------------------------------------------------------------------
| PROJECTS
|--------------------------------------------------------------------------
*/

Route::prefix('projects')->name('projects.')->group(function () {
    Route::get('/',                   [PageController::class, 'projects'])->name('index');
    Route::get('/outdoor-billboard',  [PageController::class, 'projectsOutdoor'])->name('outdoor-billboard');
    Route::get('/commercial',         [PageController::class, 'projectsCommercial'])->name('commercial');
    Route::get('/retail',             [PageController::class, 'projectsRetail'])->name('retail');
    Route::get('/corporate',          [PageController::class, 'projectsCorporate'])->name('corporate');
    Route::get('/fine-pixel',         [PageController::class, 'projectsFinePixel'])->name('fine-pixel');

    // MUST be last — catches /{slug} so it doesn't swallow above routes
    Route::get('/{slug}',             [HomeController::class, 'projectShow'])->name('show');
});

/*
|--------------------------------------------------------------------------
| INDUSTRIES
|--------------------------------------------------------------------------
*/

Route::prefix('industries')->name('industries.')->group(function () {
    Route::get('/',            [PageController::class, 'industryOutdoor'])->name('outdoorAd');
    Route::get('/retail',      [PageController::class, 'industryRetail'])->name('retail');
    Route::get('/corporate',   [PageController::class, 'industryCorporate'])->name('corporate');
    Route::get('/developers',  [PageController::class, 'industryDevelopers'])->name('developers');
    Route::get('/automotive',  [PageController::class, 'industryAutomotive'])->name('automotive');
    Route::get('/hospitality', [PageController::class, 'industryHospitality'])->name('hospitality');
    Route::get('/banks',       [PageController::class, 'industryBanks'])->name('banks');
    Route::get('/government',  [PageController::class, 'industryGovernment'])->name('government');
});

/*
|--------------------------------------------------------------------------
| SERVICES DETAIL
|--------------------------------------------------------------------------
*/

Route::get('/services/{slug}', [HomeController::class, 'serviceShow'])->name('services.show');