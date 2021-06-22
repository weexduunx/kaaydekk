<?php

namespace Container7G2fFfs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSensioFrameworkExtra_Psr7_Listener_ResponseService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sensio_framework_extra.psr7.listener.response' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\PsrResponseListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/PsrResponseListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/psr-http-message-bridge/HttpFoundationFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/psr-http-message-bridge/Factory/HttpFoundationFactory.php';

        return $container->privates['sensio_framework_extra.psr7.listener.response'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\PsrResponseListener(new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory());
    }
}