<?php

namespace Container7G2fFfs;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9cfeb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6eac3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties63e78 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        if ($this->valueHolder9cfeb === $returnValue = $this->valueHolder9cfeb->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer6eac3 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9cfeb) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9cfeb = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, '__get', ['name' => $name], $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        if (isset(self::$publicProperties63e78[$name])) {
            return $this->valueHolder9cfeb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cfeb;

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

        $targetObject = $this->valueHolder9cfeb;
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
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cfeb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9cfeb;
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
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, '__isset', array('name' => $name), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cfeb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9cfeb;
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
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, '__unset', array('name' => $name), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9cfeb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9cfeb;
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
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, '__clone', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        $this->valueHolder9cfeb = clone $this->valueHolder9cfeb;
    }

    public function __sleep()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, '__sleep', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return array('valueHolder9cfeb');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6eac3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6eac3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'initializeProxy', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9cfeb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9cfeb;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
