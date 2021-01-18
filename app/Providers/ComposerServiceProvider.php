<?php

namespace App\Providers;

use App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function() {
            $locale = App::getLocale();
            \Carbon\Carbon::setLocale($locale);
        });
        // Using class based composers...
        View::composer(
            'main', 'App\Http\ViewComposers\AutocompleteComposer'
        );
        View::composer(
            'header', 'App\Http\ViewComposers\ScrollingNewsComposer'
        );
        View::composer(
            'footer', 'App\Http\ViewComposers\NewsComposer'
        );
        View::composer(
            'footer', 'App\Http\ViewComposers\ContentComposer'
        );
        View::composer(
            'pages.partials.home_slider', 'App\Http\ViewComposers\SliderComposer'
        );
        View::composer(
            'pages.partials.services', 'App\Http\ViewComposers\ServicesComposer'
        );
        View::composer(
            'pages.partials.departments', 'App\Http\ViewComposers\DepartmentComposer'
        );
        View::composer(
            'pages.partials.departments-sidebar', 'App\Http\ViewComposers\DepartmentComposer'
        );
        View::composer(
            'appointment', 'App\Http\ViewComposers\DepartmentComposer'
        );
        View::composer(
            'pages.partials.category-sidebar', 'App\Http\ViewComposers\CategoryComposer'
        );
        View::composer(
            'pages.partials.latest_news', 'App\Http\ViewComposers\NewsComposer'
        );
        View::composer(
            'pages.partials.doctor_team', 'App\Http\ViewComposers\DoctorComposer'
        );

        // Using Closure based composers...
        View::composer('dashboard', function ($view) {
            //
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
