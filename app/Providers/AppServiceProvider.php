<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Blade::directive('active', function ($route) {
            return "<?php echo request()->routeIs($route) ? 'active' : ''; ?>";
        });

    }
}
