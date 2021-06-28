<?php

namespace ContainerXfZXLw9;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder05666 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7fc59 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf6352 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        if ($this->valueHolder05666 === $returnValue = $this->valueHolder05666->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer7fc59 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder05666) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder05666 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, '__get', ['name' => $name], $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        if (isset(self::$publicPropertiesf6352[$name])) {
            return $this->valueHolder05666->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05666;

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

        $targetObject = $this->valueHolder05666;
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
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05666;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder05666;
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
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, '__isset', array('name' => $name), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05666;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder05666;
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
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, '__unset', array('name' => $name), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder05666;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder05666;
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
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, '__clone', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        $this->valueHolder05666 = clone $this->valueHolder05666;
    }

    public function __sleep()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, '__sleep', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return array('valueHolder05666');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7fc59 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7fc59;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'initializeProxy', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder05666;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder05666;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
