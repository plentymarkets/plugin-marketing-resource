<?php

namespace MarketingResource\Controllers;

use Plenty\Plugin\Application;
use Plenty\Plugin\Controller;

class MarketingResourceController extends Controller
{
    /**
     * @return string
     */
    public function getPluginPath()
    {
        $app = pluginApp(Application::class);
        return $app->getUrlPath('MarketingResource');
    }
}