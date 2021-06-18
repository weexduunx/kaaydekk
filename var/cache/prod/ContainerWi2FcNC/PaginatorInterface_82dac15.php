<?php

namespace ContainerWi2FcNC;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder13737 = null;
    private $initializer823a2 = null;
    private static $publicProperties1d13b = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;
        if ($this->valueHolder13737 === $returnValue = $this->valueHolder13737->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer823a2 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder13737) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder13737 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, '__get', ['name' => $name], $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;
        if (isset(self::$publicProperties1d13b[$name])) {
            return $this->valueHolder13737->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13737;
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
        $targetObject = $this->valueHolder13737;
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
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13737;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder13737;
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
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, '__isset', array('name' => $name), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13737;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder13737;
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
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, '__unset', array('name' => $name), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13737;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder13737;
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
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, '__clone', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;
        $this->valueHolder13737 = clone $this->valueHolder13737;
    }
    public function __sleep()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, '__sleep', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;
        return array('valueHolder13737');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer823a2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer823a2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'initializeProxy', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder13737;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder13737;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
