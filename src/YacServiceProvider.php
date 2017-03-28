<?php

namespace Lrm\Yac;

use Illuminate\Support\ServiceProvider;

class YacServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->resolving('cache', function($cache) {
            $cache->extend('yac', function($app, $config) {
                return new YacStore($config['prefix']);
            });
        });
    }
}