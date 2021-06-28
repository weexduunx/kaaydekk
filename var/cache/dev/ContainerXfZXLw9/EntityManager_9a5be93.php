<?php

namespace ContainerXfZXLw9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getConnection', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getMetadataFactory', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getExpressionBuilder', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'beginTransaction', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getCache', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'transactional', array('func' => $func), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->transactional($func);
    }

    public function commit()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'commit', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->commit();
    }

    public function rollback()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'rollback', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getClassMetadata', array('className' => $className), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'createQuery', array('dql' => $dql), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'createNamedQuery', array('name' => $name), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'createQueryBuilder', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'flush', array('entity' => $entity), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'clear', array('entityName' => $entityName), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->clear($entityName);
    }

    public function close()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'close', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->close();
    }

    public function persist($entity)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'persist', array('entity' => $entity), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'remove', array('entity' => $entity), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'refresh', array('entity' => $entity), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'detach', array('entity' => $entity), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'merge', array('entity' => $entity), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'contains', array('entity' => $entity), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getEventManager', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getConfiguration', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'isOpen', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getUnitOfWork', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getProxyFactory', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'initializeObject', array('obj' => $obj), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'getFilters', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'isFiltersStateClean', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, 'hasFilters', array(), $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        return $this->valueHolder05666->hasFilters();
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

        $instance->initializer7fc59 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder05666) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder05666 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder05666->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7fc59 && ($this->initializer7fc59->__invoke($valueHolder05666, $this, '__get', ['name' => $name], $this->initializer7fc59) || 1) && $this->valueHolder05666 = $valueHolder05666;

        if (isset(self::$publicPropertiesf6352[$name])) {
            return $this->valueHolder05666->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
