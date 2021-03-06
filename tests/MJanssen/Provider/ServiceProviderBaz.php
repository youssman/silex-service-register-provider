<?php
namespace MJanssen\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use stdClass;

/**
 * Class ServiceProvider
 * @package MJanssen\Provider
 */
class ServiceProviderBaz implements ServiceProviderInterface
{
    /**
     * @param Application $app
     */
    public function register(Application $app)
    {
        $app['baz'] = $app->share(function($app) {
            return new stdClass();
        });
    }

    /**
     * @param Application $app
     */
    public function boot(Application $app)
    {
    }
}