<?php

namespace App\Providers;

use App\Models\organ;
use App\Models\Tissue;
use App\Models\Biospecimen;
use App\Models\SpecimenType;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('money', function ($value) {
            return "<?php echo number_format($value, 2); ?>";
        });
        Blade::directive('number', function ($value) {
            return "<?php echo number_format($value); ?>";
        });
        View::share('specimensAll', SpecimenType::orderBy('specimen_type', 'ASC')->limit(12)->get());
        View::share('biospecimensAll', Biospecimen::count());
        View::share('covAll', Biospecimen::where('ProjectAcronym', 'COVID-19')->count());
        View::share('tissuesAll', Tissue::count());
        View::share('organsAll', organ::count());
    }
}
