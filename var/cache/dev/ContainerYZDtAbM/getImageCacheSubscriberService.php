<?php

namespace ContainerYZDtAbM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImageCacheSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Listener\ImageCacheSubscriber' shared autowired service.
     *
     * @return \App\Listener\ImageCacheSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/src/Listener/ImageCacheSubscriber.php';

        return $container->privates['App\\Listener\\ImageCacheSubscriber'] = new \App\Listener\ImageCacheSubscriber(($container->services['liip_imagine.cache.manager'] ?? $container->getLiipImagine_Cache_ManagerService()), ($container->privates['Vich\\UploaderBundle\\Templating\\Helper\\UploaderHelper'] ?? $container->getUploaderHelperService()));
    }
}
