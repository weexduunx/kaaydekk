<?php

namespace ContainerSTRVck0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Form_RendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Form/TwigRendererEngine.php';

        return $container->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($container->parameters['twig.form.resources'], ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService())), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->get_Container_Private_Security_Csrf_TokenManagerService()));
    }
}
