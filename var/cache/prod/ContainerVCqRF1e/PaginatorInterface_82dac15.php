<?php

namespace ContainerVCqRF1e;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder47984 = null;
    private $initializer3ef66 = null;
    private static $publicProperties04fbf = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        if ($this->valueHolder47984 === $returnValue = $this->valueHolder47984->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer3ef66 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder47984) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder47984 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, '__get', ['name' => $name], $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        if (isset(self::$publicProperties04fbf[$name])) {
            return $this->valueHolder47984->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47984;
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
        $targetObject = $this->valueHolder47984;
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
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47984;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder47984;
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
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, '__isset', array('name' => $name), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47984;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder47984;
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
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, '__unset', array('name' => $name), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47984;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder47984;
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
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, '__clone', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        $this->valueHolder47984 = clone $this->valueHolder47984;
    }
    public function __sleep()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, '__sleep', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return array('valueHolder47984');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3ef66 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3ef66;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'initializeProxy', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder47984;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder47984;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
