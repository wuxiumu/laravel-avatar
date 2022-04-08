<?php
namespace Wqb\Avatar;
use Illuminate\Support\ServiceProvider;
class AvatarProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/avatar.php');
        $this->publishes([
            __DIR__.'/config/avatar.php' => config_path('avatar.php'),
            __DIR__.'/config/WawaSC-Regular.otf' => public_path('/fonts/WawaSC-Regular.otf'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('avatar', function ($app) {
            return new Avatar($app['config']);
        });
    }
}