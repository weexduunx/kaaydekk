<?php

namespace ContainerBjundyf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientAuthAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\ClientAuthAuthenticator' shared autowired service.
     *
     * @return \App\Security\ClientAuthAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Authenticator/AbstractFormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/PasswordAuthenticatedInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Security/ClientAuthAuthenticator.php';

        return $container->privates['App\\Security\\ClientAuthAuthenticator'] = new \App\Security\ClientAuthAuthenticator(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->get_Container_Private_Security_Csrf_TokenManagerService()), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}
