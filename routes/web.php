<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SolutionPageController;

/*
|--------------------------------------------------------------------------
| FRONTEND ROUTES
|--------------------------------------------------------------------------
*/

/*--- HOME ---*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*--- MAIN PAGES ---*/
Route::get('/why-led-media', [PageController::class, 'whyLed'])->name('why-led-media');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/insights', [PageController::class, 'insights'])->name('insights');

/*--- SERVICES ---*/
Route::get('/services', [PageController::class, 'services'])->name('services.index');
Route::get('/services/{slug}', [PageController::class, 'serviceShow'])->name('services.show');

/*--- CARD DETAIL ---*/
Route::get('/card-detail', function () {
    return view('frontend.pages.home.CardDetail');
})->name('card.detail');


/*
|--------------------------------------------------------------------------
| SOLUTIONS
|--------------------------------------------------------------------------
*/
Route::prefix('solutions')->name('solutions.')->group(function () {

    Route::get('/outdoor-billboards', [SolutionPageController::class, 'outdoorBillboards'])->name('outdoor-billboards');

    Route::get('/indoor-commercial', [SolutionPageController::class, 'indoorCommercial'])->name('indoor-commercial');

    Route::get('/fine-pixel', [SolutionPageController::class, 'finePixel'])->name('fine-pixel');

    Route::get('/meeting-room', [SolutionPageController::class, 'meetingRoom'])->name('meeting-room');

    Route::get('/retail', [SolutionPageController::class, 'retail'])->name('retail');

    Route::get('/control-systems', [SolutionPageController::class, 'controlSystems'])->name('control-systems');

    Route::get('/installation', [SolutionPageController::class, 'installation'])->name('installation');

    // MUST BE LAST (dynamic route)
    Route::get('/{slug}', [SolutionPageController::class, 'show'])->name('show');
});

/*
|--------------------------------------------------------------------------
| PROJECTS
|--------------------------------------------------------------------------
*/
Route::prefix('projects')->name('projects.')->group(function () {

    Route::get('/', [PageController::class, 'projects'])->name('index');

    Route::get('/outdoor-billboard', [PageController::class, 'projectsOutdoor'])->name('outdoor-billboard');

    Route::get('/commercial', [PageController::class, 'projectsCommercial'])->name('commercial');

    Route::get('/retail', [PageController::class, 'projectsRetail'])->name('retail');

    Route::get('/corporate', [PageController::class, 'projectsCorporate'])->name('corporate');

    Route::get('/fine-pixel', [PageController::class, 'projectsFinePixel'])->name('fine-pixel');

    // MUST BE LAST
    Route::get('/{slug}', [HomeController::class, 'projectShow'])->name('show');
});

/*
|--------------------------------------------------------------------------
| INDUSTRIES
|--------------------------------------------------------------------------
*/
Route::prefix('industries')->name('industries.')->group(function () {

    Route::get('/outdoor-advertising', [PageController::class, 'outdoorAd'])->name('outdoorAd');

    Route::get('/retail', [PageController::class, 'retail'])->name('retail');

    Route::get('/corporate', [PageController::class, 'corporate'])->name('corporate');

    Route::get('/developers', [PageController::class, 'developers'])->name('developers');

    Route::get('/automotive', [PageController::class, 'automotive'])->name('automotive');

    Route::get('/hospitality', [PageController::class, 'hospitality'])->name('hospitality');

    Route::get('/banks', [PageController::class, 'banks'])->name('banks');

    Route::get('/government', [PageController::class, 'government'])->name('government');
});