<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
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
        Model::unguard();
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->customDirectives();
    }

    private function customDirectives()
    {
        Blade::directive('og', function ($expression) {
            list($property, $content) = explode(',', $expression, 2);
            return"<?php echo '<meta property=\"og:' . $property . '\" content=\"' . $content . '\">' . \"\n\"; ?>";
        });
        Blade::directive('twitter', function ($expression) {
            list($property, $content) = explode(',', $expression, 2);
            return  "<?php echo '<meta property=\"twitter:' . $property . '\" content=\"' . $content . '\">' . \"\n\"; ?>";
        });
        Blade::directive('article', function ($expression) {
            list($property, $content) = explode(',', $expression, 2);
            return  "<?php echo '<meta property=\"article:' . $property . '\" content=\"' . $content . '\">' . \"\n\"; ?>";
        });
    }
}
