<?php

namespace Container5xmQ1Ax;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getConnection', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getMetadataFactory', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getExpressionBuilder', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'beginTransaction', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getCache', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getCache();
    }

    public function transactional($func)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'transactional', array('func' => $func), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->transactional($func);
    }

    public function commit()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'commit', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->commit();
    }

    public function rollback()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'rollback', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getClassMetadata', array('className' => $className), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'createQuery', array('dql' => $dql), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'createNamedQuery', array('name' => $name), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'createQueryBuilder', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'flush', array('entity' => $entity), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'clear', array('entityName' => $entityName), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->clear($entityName);
    }

    public function close()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'close', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->close();
    }

    public function persist($entity)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'persist', array('entity' => $entity), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'remove', array('entity' => $entity), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'refresh', array('entity' => $entity), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'detach', array('entity' => $entity), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'merge', array('entity' => $entity), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getRepository', array('entityName' => $entityName), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'contains', array('entity' => $entity), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getEventManager', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getConfiguration', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'isOpen', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getUnitOfWork', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getProxyFactory', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'initializeObject', array('obj' => $obj), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'getFilters', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'isFiltersStateClean', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, 'hasFilters', array(), $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        return $this->valueHolder11eff->hasFilters();
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

        $instance->initializera75f0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder11eff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder11eff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder11eff->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera75f0 && ($this->initializera75f0->__invoke($valueHolder11eff, $this, '__get', ['name' => $name], $this->initializera75f0) || 1) && $this->valueHolder11eff = $valueHolder11eff;

        if (isset(self::$publicProperties8c372[$name])) {
            return $this->valueHolder11eff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
