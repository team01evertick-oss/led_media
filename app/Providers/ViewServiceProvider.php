<?php

// namespace App\Providers;

// use App\Http\Controllers\Frontend\DataController;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\ServiceProvider;

/**
 * Shares global CMS data with ALL views.
 * Frontend teammate accesses: $settings, $solutions, $industries
 */
// class ViewServiceProvider extends ServiceProvider
// {
//     public function boot(): void
//     {
//         View::composer('*', function ($view) {
//             // Only share frontend data with non-admin views
//             if (!request()->is('admin/*')) {
//                 $view->with([
//                     'settings'   => DataController::siteSettings(),
//                     'solutions'  => DataController::solutions(),
//                     'industries' => DataController::industries(),
//                     'contactInfo'=> DataController::contactInfo(),
//                 ]);
//             }
//         });
//     }
// }