<?php

namespace MarketingResource\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class MarketingResourceServiceProvider
 * @package MarketingResource\Providers
 */
class MarketingResourceServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(MarketingResourceRouteServiceProvider::class);
    }
}