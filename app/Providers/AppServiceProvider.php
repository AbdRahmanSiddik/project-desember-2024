<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
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
        Blade::directive('rupiah', function($expression){
            return "<?= 'Rp. '. number_format($expression, 0, ',', '.') ?>";
        });

        Blade::directive('percentage', function($expression){
            return "<?= number_format($expression, 2, ',', '.') . '%' ?>";
        });

        Blade::directive('ucfirst', function($expression){
            return "<?= ucfirst($expression) ?>";
        });

        Blade::directive('myprofile', function ($expression) {
            return "<?php echo \App\Models\Admin\Profile::where('id_profile', Auth::user()->profile_id)->value($expression); ?>";
        });
    }
}
