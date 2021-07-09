<?php

namespace ContainerYZDtAbM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhoneNumberValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumberValidator' shared service.
     *
     * @return \Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumberValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/odolbeau/phone-number-bundle/src/Validator/Constraints/PhoneNumberValidator.php';

        $container->privates['Misd\\PhoneNumberBundle\\Validator\\Constraints\\PhoneNumberValidator'] = $instance = new \Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumberValidator(($container->privates['libphonenumber\\PhoneNumberUtil'] ?? $container->getPhoneNumberUtilService()), 'ZZ', 1);

        $instance->setPropertyAccessor(($container->privates['property_accessor'] ?? $container->getPropertyAccessorService()));

        return $instance;
    }
}