<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\HomePageSection;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('*', function ($view) {

            $hero = HomePageSection::where('section_key', 'hero')
                        ->where('status', 1)
                        ->first();

            $view->with('hero', $hero);
        });
    }
}