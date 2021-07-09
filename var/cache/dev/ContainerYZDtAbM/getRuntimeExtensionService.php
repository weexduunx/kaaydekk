<?php

namespace ContainerYZDtAbM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRuntimeExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'KevinPapst\AdminLTEBundle\Twig\RuntimeExtension' shared service.
     *
     * @return \KevinPapst\AdminLTEBundle\Twig\RuntimeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/kevinpapst/adminlte-bundle/Twig/RuntimeExtension.php';

        return $container->privates['KevinPapst\\AdminLTEBundle\\Twig\\RuntimeExtension'] = new \KevinPapst\AdminLTEBundle\Twig\RuntimeExtension(($container->privates['admin_lte_theme.context_helper'] ?? $container->getAdminLteTheme_ContextHelperService()), $container->parameters['admin_lte_theme.routes']);
    }
}