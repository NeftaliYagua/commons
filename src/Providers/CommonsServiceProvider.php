<?php

namespace LaravelSchema\Commons;

use Illuminate\Support\ServiceProvider;

class CommonsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/commons.php' => config_path('commons.php'),
        ]);
    }
    public function register()
    {
        
    }
}