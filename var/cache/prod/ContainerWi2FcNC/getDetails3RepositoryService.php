<?php

namespace ContainerWi2FcNC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDetails3RepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\Details3Repository' shared autowired service.
     *
     * @return \App\Repository\Details3Repository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\Details3Repository'] = new \App\Repository\Details3Repository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
