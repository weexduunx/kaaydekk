<?php

namespace ContainerBjundyf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder13737 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer823a2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1d13b = [
        
    ];

    public function getConnection()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getConnection', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getMetadataFactory', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getExpressionBuilder', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'beginTransaction', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getCache', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getCache();
    }

    public function transactional($func)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'transactional', array('func' => $func), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->transactional($func);
    }

    public function commit()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'commit', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->commit();
    }

    public function rollback()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'rollback', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getClassMetadata', array('className' => $className), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'createQuery', array('dql' => $dql), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'createNamedQuery', array('name' => $name), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'createQueryBuilder', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'flush', array('entity' => $entity), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'clear', array('entityName' => $entityName), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->clear($entityName);
    }

    public function close()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'close', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->close();
    }

    public function persist($entity)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'persist', array('entity' => $entity), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'remove', array('entity' => $entity), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'refresh', array('entity' => $entity), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'detach', array('entity' => $entity), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'merge', array('entity' => $entity), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getRepository', array('entityName' => $entityName), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'contains', array('entity' => $entity), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getEventManager', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getConfiguration', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'isOpen', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getUnitOfWork', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getProxyFactory', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'initializeObject', array('obj' => $obj), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'getFilters', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'isFiltersStateClean', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, 'hasFilters', array(), $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        return $this->valueHolder13737->hasFilters();
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

        $instance->initializer823a2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder13737) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder13737 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder13737->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer823a2 && ($this->initializer823a2->__invoke($valueHolder13737, $this, '__get', ['name' => $name], $this->initializer823a2) || 1) && $this->valueHolder13737 = $valueHolder13737;

        if (isset(self::$publicProperties1d13b[$name])) {
            return $this->valueHolder13737->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
