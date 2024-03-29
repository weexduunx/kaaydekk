<?php

namespace ContainerYZDtAbM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMatriculeGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\utile\MatriculeGenerator' shared autowired service.
     *
     * @return \App\utile\MatriculeGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/utile/MatriculeGenerator.php';

        return $container->privates['App\\utile\\MatriculeGenerator'] = new \App\utile\MatriculeGenerator(($container->privates['App\\Repository\\InscriptionRepository'] ?? $container->load('getInscriptionRepositoryService')));
    }
}
