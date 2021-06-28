<?php

namespace ContainerQmSnoMR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDetailsCandidatureCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\DetailsCandidatureCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\DetailsCandidatureCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/DetailsCandidatureCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/CsvService.php';

        $container->services['App\\Controller\\Admin\\DetailsCandidatureCrudController'] = $instance = new \App\Controller\Admin\DetailsCandidatureCrudController(($container->privates['App\\Service\\CsvService'] ?? ($container->privates['App\\Service\\CsvService'] = new \App\Service\CsvService())));

        $instance->setContainer(($container->privates['.service_locator.7Gh9pQb'] ?? $container->load('get_ServiceLocator_7Gh9pQbService'))->withContext('App\\Controller\\Admin\\DetailsCandidatureCrudController', $container));

        return $instance;
    }
}
