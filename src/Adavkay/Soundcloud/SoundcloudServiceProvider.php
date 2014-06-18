<?php

namespace Adavkay\Soundcloud;

use Illuminate\Support\ServiceProvider;
use Soundcloud;

class SoundcloudServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app['Soundcloud'] = $this->app->share(function($app)
        {
            $config = $app['config']['soundcloud'];
            return new Soundcloud\Service( $config['client_id'], $config['client_secret'], $config['redirect_uri'] );
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Soundcloud', 'Adavkay\Facades\Soundcloud');
        });
    }
}