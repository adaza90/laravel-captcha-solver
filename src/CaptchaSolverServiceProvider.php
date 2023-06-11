<?php

namespace LaravelCaptchaSolver;

use Illuminate\Support\ServiceProvider;

class CaptchaSolverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/captchasolver.php' => config_path('captchasolver.php'),
        ], 'captchasolver');

        $this->mergeConfigFrom(
            __DIR__.'/../config/captchasolver.php',
            'captchasolver'
        );
    }

    public function register()
    {
        //
    }

    public function provides()
    {
        //
    }
}
