<?php

namespace Container7G2fFfs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpu_Oauth2_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knpu.oauth2.registry' shared service.
     *
     * @return \KnpU\OAuth2ClientBundle\Client\ClientRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/ClientRegistry.php';

        return $container->services['knpu.oauth2.registry'] = new \KnpU\OAuth2ClientBundle\Client\ClientRegistry($container, ['google' => 'knpu.oauth2.client.google']);
    }
}
