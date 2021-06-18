<?php

namespace Container7G2fFfs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_SensioFrameworkExtra_Psr7_ArgumentValueResolver_ServerRequestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.sensio_framework_extra.psr7.argument_value_resolver.server_request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/psr-http-message-bridge/HttpMessageFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/psr-http-message-bridge/Factory/PsrHttpFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/RequestFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/ResponseFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/ServerRequestFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/StreamFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/UploadedFileFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/UriFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nyholm/psr7/src/Factory/Psr17Factory.php';

        $a = new \Nyholm\Psr7\Factory\Psr17Factory();

        return $container->privates['debug.sensio_framework_extra.psr7.argument_value_resolver.server_request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentValueResolver\Psr7ServerRequestResolver(new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($a, $a, $a, $a)), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }
}
