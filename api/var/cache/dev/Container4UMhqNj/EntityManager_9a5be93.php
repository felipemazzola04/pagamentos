<?php

namespace Container4UMhqNj;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereef1d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3781d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4d0a1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getConnection', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getMetadataFactory', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getExpressionBuilder', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'beginTransaction', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getCache', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'transactional', array('func' => $func), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'commit', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->commit();
    }

    public function rollback()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'rollback', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getClassMetadata', array('className' => $className), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'createQuery', array('dql' => $dql), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'createNamedQuery', array('name' => $name), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'createQueryBuilder', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'flush', array('entity' => $entity), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'clear', array('entityName' => $entityName), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->clear($entityName);
    }

    public function close()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'close', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->close();
    }

    public function persist($entity)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'persist', array('entity' => $entity), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'remove', array('entity' => $entity), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'refresh', array('entity' => $entity), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'detach', array('entity' => $entity), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'merge', array('entity' => $entity), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'contains', array('entity' => $entity), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getEventManager', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getConfiguration', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'isOpen', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getUnitOfWork', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getProxyFactory', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'initializeObject', array('obj' => $obj), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'getFilters', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'isFiltersStateClean', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'hasFilters', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return $this->valueHoldereef1d->hasFilters();
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

        $instance->initializer3781d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereef1d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereef1d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereef1d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, '__get', ['name' => $name], $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        if (isset(self::$publicProperties4d0a1[$name])) {
            return $this->valueHoldereef1d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereef1d;

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

        $targetObject = $this->valueHoldereef1d;
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
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereef1d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereef1d;
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
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, '__isset', array('name' => $name), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereef1d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereef1d;
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
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, '__unset', array('name' => $name), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereef1d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereef1d;
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
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, '__clone', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        $this->valueHoldereef1d = clone $this->valueHoldereef1d;
    }

    public function __sleep()
    {
        $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, '__sleep', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;

        return array('valueHoldereef1d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3781d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3781d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3781d && ($this->initializer3781d->__invoke($valueHoldereef1d, $this, 'initializeProxy', array(), $this->initializer3781d) || 1) && $this->valueHoldereef1d = $valueHoldereef1d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereef1d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereef1d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
