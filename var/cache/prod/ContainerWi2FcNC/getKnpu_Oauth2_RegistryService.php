<?php

namespace ContainerWi2FcNC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpu_Oauth2_RegistryService extends App_KernelProdContainer
{
    /*
     * Gets the public 'knpu.oauth2.registry' shared service.
     *
     * @return \KnpU\OAuth2ClientBundle\Client\ClientRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['knpu.oauth2.registry'] = new \KnpU\OAuth2ClientBundle\Client\ClientRegistry($container, ['google' => 'knpu.oauth2.client.google']);
    }
}
