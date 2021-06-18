<?php

namespace ContainerBjundyf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PropertyController' shared autowired service.
     *
     * @return \App\Controller\PropertyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PropertyController.php';

        $container->services['App\\Controller\\PropertyController'] = $instance = new \App\Controller\PropertyController(($container->privates['App\\Repository\\BienRepository'] ?? $container->load('getBienRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\PropertyController', $container));

        return $instance;
    }
}
