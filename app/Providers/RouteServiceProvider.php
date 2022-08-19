<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        
            Route::middleware('web')
                ->prefix('notes')
                ->namespace($this->namespace)
                ->group(base_path('routes/notes.php'));
            
            Route::middleware('web')
                ->prefix('pages')
                ->namespace($this->namespace)
                ->group(base_path('routes/pages.php'));
            
            Route::middleware('web')
                ->prefix('elements/simple')
                ->namespace($this->namespace)
                ->group(base_path('routes/elements_simple.php'));
            
            Route::middleware('web')
                ->prefix('elements/complex')
                ->namespace($this->namespace)
                ->group(base_path('routes/elements_complex.php'));
            
            Route::middleware('web')
                ->prefix('elements/compound')
                ->namespace($this->namespace)
                ->group(base_path('routes/elements_compound.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
