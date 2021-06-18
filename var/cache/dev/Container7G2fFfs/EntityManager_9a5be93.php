<?php

namespace Container7G2fFfs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getConnection', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getMetadataFactory', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getExpressionBuilder', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'beginTransaction', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getCache', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'transactional', array('func' => $func), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->transactional($func);
    }

    public function commit()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'commit', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->commit();
    }

    public function rollback()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'rollback', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getClassMetadata', array('className' => $className), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'createQuery', array('dql' => $dql), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'createNamedQuery', array('name' => $name), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'createQueryBuilder', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'flush', array('entity' => $entity), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'clear', array('entityName' => $entityName), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->clear($entityName);
    }

    public function close()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'close', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->close();
    }

    public function persist($entity)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'persist', array('entity' => $entity), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'remove', array('entity' => $entity), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'refresh', array('entity' => $entity), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'detach', array('entity' => $entity), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'merge', array('entity' => $entity), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'contains', array('entity' => $entity), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getEventManager', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getConfiguration', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'isOpen', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getUnitOfWork', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getProxyFactory', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'initializeObject', array('obj' => $obj), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'getFilters', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'isFiltersStateClean', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, 'hasFilters', array(), $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        return $this->valueHolder9cfeb->hasFilters();
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

        $instance->initializer6eac3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9cfeb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9cfeb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9cfeb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6eac3 && ($this->initializer6eac3->__invoke($valueHolder9cfeb, $this, '__get', ['name' => $name], $this->initializer6eac3) || 1) && $this->valueHolder9cfeb = $valueHolder9cfeb;

        if (isset(self::$publicProperties63e78[$name])) {
            return $this->valueHolder9cfeb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
