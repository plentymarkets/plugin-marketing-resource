<?php

namespace MarketingResource\Controllers;

use Plenty\Plugin\Templates\Twig;

class MarketingResourceController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getPluginPath(Twig $twig)
    {
        return json_encode("{test: 1}");
    }
}