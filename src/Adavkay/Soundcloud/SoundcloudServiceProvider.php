<?php

namespace Adavkay\Soundcloud;

use Illuminate\Support\ServiceProvider;
use Soundcloud;

class SoundcloudServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->package('adavkay/laravel-soundcloud');

        $this->app['soundcloud'] = $this->app->share(function($app)
        {
            $config = $app['config']['laravel-soundcloud::config'];
            return new Soundcloud\Service( $config['client_id'], $config['client_secret'], $config['redirect_uri'] );
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Soundcloud', 'Adavkay\Soundcloud\Facades\Soundcloud');
        });
    }
}