<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('money', function ($money) {
            return "<?php echo number_format($money,2); ?>";
        });
        Blade::directive('numbers', function ($numbers) {
            return "<?php echo number_format($numbers); ?>";
        });

        Blade::directive('datef1', function ($datef1) {
            return "<?php echo date('d-m-Y', strtotime($datef1)); ?>";
            // return Carbon::parse($datef1)->format('Y-m-d');
        });
    }
}
