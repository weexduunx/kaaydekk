<?php

namespace Container9QvCtb6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_SwitchuserListener_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.switchuser_listener.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\SwitchUserListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/SwitchUserListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $container->privates['security.authentication.switchuser_listener.main'] = new \Symfony\Component\Security\Http\Firewall\SwitchUserListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), ($container->privates['security.user_checker'] ?? ($container->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'main', ($container->privates['debug.security.access.decision_manager'] ?? $container->getDebug_Security_Access_DecisionManagerService()), ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), false);
    }
}
