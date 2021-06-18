<?php

namespace Container7G2fFfs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUniqidNamer_ThumbnailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer.thumbnails' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/UniqidNamer.php';

        return $container->services['Vich\\UploaderBundle\\Naming\\UniqidNamer.thumbnails'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }
}
