<?php

namespace App\Providers;

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
        Blade::directive('og', function ($expression) {
            list($property, $content) = explode(',', $expression, 2);
            return "<?php echo '<meta property=\"og:' . $property . '\" content=\"' . $content . '\">' . \"\n\"; ?>";
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
