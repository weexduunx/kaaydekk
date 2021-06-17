<?php

namespace ContainerVCqRF1e;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder47984 = null;
    private $initializer3ef66 = null;
    private static $publicProperties04fbf = [
        
    ];
    public function getConnection()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getConnection', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getMetadataFactory', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getExpressionBuilder', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'beginTransaction', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getCache', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getCache();
    }
    public function transactional($func)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'transactional', array('func' => $func), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->transactional($func);
    }
    public function commit()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'commit', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->commit();
    }
    public function rollback()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'rollback', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getClassMetadata', array('className' => $className), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'createQuery', array('dql' => $dql), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'createNamedQuery', array('name' => $name), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'createQueryBuilder', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'flush', array('entity' => $entity), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'clear', array('entityName' => $entityName), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->clear($entityName);
    }
    public function close()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'close', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->close();
    }
    public function persist($entity)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'persist', array('entity' => $entity), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'remove', array('entity' => $entity), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'refresh', array('entity' => $entity), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'detach', array('entity' => $entity), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'merge', array('entity' => $entity), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'contains', array('entity' => $entity), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getEventManager', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getConfiguration', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'isOpen', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getUnitOfWork', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getProxyFactory', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'initializeObject', array('obj' => $obj), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'getFilters', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'isFiltersStateClean', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, 'hasFilters', array(), $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        return $this->valueHolder47984->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer3ef66 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder47984) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder47984 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder47984->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer3ef66 && ($this->initializer3ef66->__invoke($valueHolder47984, $this, '__get', ['name' => $name], $this->initializer3ef66) || 1) && $this->valueHolder47984 = $valueHolder47984;
        if (isset(self::$publicProperties04fbf[$name])) {
            return $this->valueHolder47984->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
