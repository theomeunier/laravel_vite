<?php

namespace App\Providers;

use App\Blade\ViteAssetLoader;
use Illuminate\Contracts\Foundation\Application;
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
        $this->app->singleton(ViteAssetLoader::class, function (Application $app){
            return new ViteAssetLoader(
                //lecture de la variable dans le .env 1 = dev et 0 = prod
                env('VITE_DEV'),
                public_path('assets/manifest.json'),
                $app->get('cache.store')
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
