<?php

namespace ContainerWi2FcNC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCandidatureFormTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\CandidatureFormType' shared autowired service.
     *
     * @return \App\Form\CandidatureFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\CandidatureFormType'] = new \App\Form\CandidatureFormType();
    }
}
