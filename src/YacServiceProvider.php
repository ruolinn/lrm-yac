<?php

namespace Lrm\Yac;

use Illuminate\Support\ServiceProvider;

class YacServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app['cache']->extends('yac', function($app, $config) {
            
        });
    }
}