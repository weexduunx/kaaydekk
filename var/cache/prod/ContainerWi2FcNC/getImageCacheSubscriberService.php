<?php

namespace ContainerWi2FcNC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImageCacheSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Listener\ImageCacheSubscriber' shared autowired service.
     *
     * @return \App\Listener\ImageCacheSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Listener\\ImageCacheSubscriber'] = new \App\Listener\ImageCacheSubscriber(($container->services['liip_imagine.cache.manager'] ?? $container->getLiipImagine_Cache_ManagerService()), ($container->privates['Vich\\UploaderBundle\\Templating\\Helper\\UploaderHelper'] ?? $container->getUploaderHelperService()));
    }
}
