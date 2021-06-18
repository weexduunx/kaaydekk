<?php

namespace ContainerWi2FcNC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBienRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\BienRepository' shared autowired service.
     *
     * @return \App\Repository\BienRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\BienRepository'] = new \App\Repository\BienRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
