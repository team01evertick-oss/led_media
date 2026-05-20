<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SolutionController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\InsightController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ContactMessageController;

// ── Auth ──────────────────────────────────────────────────────
Route::get('/admin/login', [LoginController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

// ── Admin Panel ───────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Solutions
    Route::resource('solutions', SolutionController::class);

    // Industries
    Route::resource('industries', IndustryController::class);

    // Projects
    Route::resource('projects', ProjectController::class);

    // Insights
    Route::resource('insights', InsightController::class);

    // Media
    Route::resource('media', MediaController::class)->only(['index', 'store', 'destroy']);
    Route::get('media/picker', [MediaController::class, 'picker'])->name('media.picker');

    // Settings
    Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingsController::class, 'update'])->name('settings.update');

    // Contact Messages
    Route::get('contact-messages', [ContactMessageController::class, 'index'])->name('contact-messages.index');
    Route::get('contact-messages/{contactMessage}', [ContactMessageController::class, 'show'])->name('contact-messages.show');
    Route::patch('contact-messages/{contactMessage}/status', [ContactMessageController::class, 'updateStatus'])->name('contact-messages.status');
    Route::patch('contact-messages/{contactMessage}/note', [ContactMessageController::class, 'addNote'])->name('contact-messages.note');
    Route::delete('contact-messages/{contactMessage}', [ContactMessageController::class, 'destroy'])->name('contact-messages.destroy');

    // Contact Info
    Route::resource('contact-info', \App\Http\Controllers\Admin\ContactInfoController::class);

    // Menus
    Route::resource('menu-groups', \App\Http\Controllers\Admin\MenuGroupController::class);
    Route::resource('menus', \App\Http\Controllers\Admin\MenuController::class);

    // Pages
    Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);

    // FAQs
    Route::resource('faqs', \App\Http\Controllers\Admin\FaqController::class);

    // CMS Blocks
    Route::resource('blocks', \App\Http\Controllers\Admin\CmsBlockController::class);

    // Users
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);

});

// ── Public Contact Form Submission ────────────────────────────
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

// ── Frontend (teammate's responsibility) ──────────────────────
// The frontend teammate will add their routes here.
// The CMS provides data via models and a shared data layer.
Route::get('/', function () {
    return redirect()->route('admin.dashboard');
}); // Placeholder — frontend team replaces this