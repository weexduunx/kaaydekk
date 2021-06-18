<?php

namespace Container9QvCtb6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $a = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin');

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/login'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'), [0 => 'IS_AUTHENTICATED_FULLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/users'), [0 => 'ROLE_SUPER_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/users'), [0 => 'ROLE_USER'], NULL);
        $instance->add($a, [0 => 'ROLE_COMMERCIAL'], NULL);
        $instance->add($a, [0 => 'IS_AUTHENTICATED_FULLY', 1 => 'ROLE_USER'], NULL);
        $instance->add($a, [0 => 'ROLE_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), [0 => 'ROLE_SUPER_USER'], NULL);
        $instance->add($a, [0 => 'IS_AUTHENTICATED_FULLY', 1 => 'ROLE_ADMIN'], NULL);

        return $instance;
    }
}
