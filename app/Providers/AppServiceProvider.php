<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('linkedin', '//www.linkedin.com/company/pixrite-llc');
        view()->share('facebook', '//www.facebook.com/Utah-Web-Design-PIXRITE-134728513425');
        view()->share('twitter', '//twitter.com/pixrite');
        view()->share('google', '//plus.google.com/115736100762343067873/about');
        
        view()->share('email', 'hello@pixrite.com');
        view()->share('address', '19215 SE 34th Street');
        view()->share('suite', 'Suite 106-248');
        view()->share('city', 'Camas');
        view()->share('state', 'WA');
        view()->share('zip', '98607');
        view()->share('phone', '(360) 524-2610');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
