<?php

namespace ContainerN2V2lF4;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder11eff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera75f0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8c372 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        if ($this->valueHolder11eff === $returnValue = $this->valueHolder11eff->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializera75f0 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder11eff) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder11eff = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, '__get', ['name' => $name], $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        if (isset(self::$publicProperties8c372[$name])) {
            return $this->valueHolder11eff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11eff;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder11eff;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11eff;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder11eff;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, '__isset', array('name' => $name), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11eff;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder11eff;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, '__unset', array('name' => $name), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11eff;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder11eff;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, '__clone', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        $this->valueHolder11eff = clone $this->valueHolder11eff;
    }

    public function __sleep()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, '__sleep', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return array('valueHolder11eff');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera75f0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera75f0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'initializeProxy', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder11eff;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder11eff;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
