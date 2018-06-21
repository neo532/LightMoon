<?php
namespace LightMoon\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Symfony\Component\Routing\RouteCollection;

class RouteProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $container
     */
    public function register(Container $container)
    {
        $container[RouteCollection::class] = new RouteCollection();
    }
}
