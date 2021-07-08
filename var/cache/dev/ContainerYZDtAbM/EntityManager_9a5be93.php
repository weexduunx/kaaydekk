<?php

namespace ContainerYZDtAbM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2a36 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7f3c7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesadb13 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getConnection', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getMetadataFactory', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getExpressionBuilder', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'beginTransaction', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getCache', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'transactional', array('func' => $func), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->transactional($func);
    }

    public function commit()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'commit', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->commit();
    }

    public function rollback()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'rollback', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getClassMetadata', array('className' => $className), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'createQuery', array('dql' => $dql), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'createNamedQuery', array('name' => $name), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'createQueryBuilder', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'flush', array('entity' => $entity), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'clear', array('entityName' => $entityName), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->clear($entityName);
    }

    public function close()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'close', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->close();
    }

    public function persist($entity)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'persist', array('entity' => $entity), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'remove', array('entity' => $entity), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'refresh', array('entity' => $entity), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'detach', array('entity' => $entity), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'merge', array('entity' => $entity), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'contains', array('entity' => $entity), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getEventManager', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getConfiguration', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'isOpen', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getUnitOfWork', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getProxyFactory', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'initializeObject', array('obj' => $obj), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'getFilters', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'isFiltersStateClean', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'hasFilters', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return $this->valueHoldera2a36->hasFilters();
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

        $instance->initializer7f3c7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera2a36) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2a36 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2a36->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, '__get', ['name' => $name], $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        if (isset(self::$publicPropertiesadb13[$name])) {
            return $this->valueHoldera2a36->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2a36;

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

        $targetObject = $this->valueHoldera2a36;
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
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2a36;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2a36;
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
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, '__isset', array('name' => $name), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2a36;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2a36;
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
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, '__unset', array('name' => $name), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2a36;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2a36;
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
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, '__clone', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        $this->valueHoldera2a36 = clone $this->valueHoldera2a36;
    }

    public function __sleep()
    {
        $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, '__sleep', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;

        return array('valueHoldera2a36');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7f3c7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7f3c7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7f3c7 && ($this->initializer7f3c7->__invoke($valueHoldera2a36, $this, 'initializeProxy', array(), $this->initializer7f3c7) || 1) && $this->valueHoldera2a36 = $valueHoldera2a36;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2a36;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2a36;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
