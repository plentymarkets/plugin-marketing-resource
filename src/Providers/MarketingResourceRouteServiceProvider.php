<?php

namespace MarketingResource\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class MarketingResourceRouteServiceProvider
 * @package MarketingResource\Providers
 */
class MarketingResourceRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('marketing-resource', 'MarketingResource\Controllers\MarketingResourceController@getPluginPath');
    }
}
