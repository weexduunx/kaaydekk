<?php

namespace ContainerWi2FcNC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactNotificationService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Notification\ContactNotification' shared autowired service.
     *
     * @return \App\Notification\ContactNotification
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Notification\\ContactNotification'] = new \App\Notification\ContactNotification(($container->services['swiftmailer.mailer.default'] ?? $container->load('getSwiftmailer_Mailer_DefaultService')), ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()));
    }
}
