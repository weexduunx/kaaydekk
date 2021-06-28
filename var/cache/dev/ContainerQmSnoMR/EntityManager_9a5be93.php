<?php

namespace ContainerQmSnoMR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder23577 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5e1c0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties67e7b = [
        
    ];

    public function getConnection()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getConnection', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getMetadataFactory', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getExpressionBuilder', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'beginTransaction', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getCache', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'transactional', array('func' => $func), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->transactional($func);
    }

    public function commit()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'commit', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->commit();
    }

    public function rollback()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'rollback', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getClassMetadata', array('className' => $className), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'createQuery', array('dql' => $dql), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'createNamedQuery', array('name' => $name), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'createQueryBuilder', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'flush', array('entity' => $entity), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'clear', array('entityName' => $entityName), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->clear($entityName);
    }

    public function close()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'close', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->close();
    }

    public function persist($entity)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'persist', array('entity' => $entity), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'remove', array('entity' => $entity), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'refresh', array('entity' => $entity), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'detach', array('entity' => $entity), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'merge', array('entity' => $entity), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'contains', array('entity' => $entity), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getEventManager', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getConfiguration', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'isOpen', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getUnitOfWork', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getProxyFactory', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'initializeObject', array('obj' => $obj), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'getFilters', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'isFiltersStateClean', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'hasFilters', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return $this->valueHolder23577->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5e1c0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder23577) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder23577 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder23577->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, '__get', ['name' => $name], $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        if (isset(self::$publicProperties67e7b[$name])) {
            return $this->valueHolder23577->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23577;

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

        $targetObject = $this->valueHolder23577;
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
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23577;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder23577;
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
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, '__isset', array('name' => $name), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23577;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder23577;
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
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, '__unset', array('name' => $name), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder23577;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder23577;
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
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, '__clone', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        $this->valueHolder23577 = clone $this->valueHolder23577;
    }

    public function __sleep()
    {
        $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, '__sleep', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;

        return array('valueHolder23577');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5e1c0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5e1c0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5e1c0 && ($this->initializer5e1c0->__invoke($valueHolder23577, $this, 'initializeProxy', array(), $this->initializer5e1c0) || 1) && $this->valueHolder23577 = $valueHolder23577;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder23577;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder23577;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
