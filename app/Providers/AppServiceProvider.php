<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Location;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        View::composer('*', function ($view) {
            $locations = Location::whereNull('parent_id')->orderBy('id', 'desc')
                ->get();

            $view->with([
               'locations' => $locations,
            ]);
        });
    }
}
