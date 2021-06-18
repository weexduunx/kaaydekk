<?php

namespace Container9QvCtb6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TNFX8FuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TNFX8Fu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TNFX8Fu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'detailsCandidatureRepository' => ['privates', 'App\\Repository\\DetailsCandidatureRepository', 'getDetailsCandidatureRepositoryService', true],
            'matriculeGenerator' => ['privates', 'App\\utile\\MatriculeGenerator', 'getMatriculeGeneratorService', true],
        ], [
            'detailsCandidatureRepository' => 'App\\Repository\\DetailsCandidatureRepository',
            'matriculeGenerator' => 'App\\utile\\MatriculeGenerator',
        ]);
    }
}
