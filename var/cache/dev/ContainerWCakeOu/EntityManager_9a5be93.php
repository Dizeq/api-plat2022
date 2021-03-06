<?php

namespace ContainerWCakeOu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd4f59 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer223fb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties03bb4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getConnection', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getMetadataFactory', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getExpressionBuilder', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'beginTransaction', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getCache', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getCache();
    }

    public function transactional($func)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'transactional', array('func' => $func), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'wrapInTransaction', array('func' => $func), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'commit', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->commit();
    }

    public function rollback()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'rollback', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getClassMetadata', array('className' => $className), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'createQuery', array('dql' => $dql), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'createNamedQuery', array('name' => $name), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'createQueryBuilder', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'flush', array('entity' => $entity), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'clear', array('entityName' => $entityName), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->clear($entityName);
    }

    public function close()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'close', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->close();
    }

    public function persist($entity)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'persist', array('entity' => $entity), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'remove', array('entity' => $entity), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'refresh', array('entity' => $entity), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'detach', array('entity' => $entity), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'merge', array('entity' => $entity), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getRepository', array('entityName' => $entityName), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'contains', array('entity' => $entity), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getEventManager', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getConfiguration', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'isOpen', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getUnitOfWork', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getProxyFactory', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'initializeObject', array('obj' => $obj), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'getFilters', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'isFiltersStateClean', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'hasFilters', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return $this->valueHolderd4f59->hasFilters();
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

        $instance->initializer223fb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd4f59) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd4f59 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd4f59->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, '__get', ['name' => $name], $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        if (isset(self::$publicProperties03bb4[$name])) {
            return $this->valueHolderd4f59->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4f59;

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

        $targetObject = $this->valueHolderd4f59;
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
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4f59;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd4f59;
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
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, '__isset', array('name' => $name), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4f59;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd4f59;
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
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, '__unset', array('name' => $name), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4f59;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd4f59;
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
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, '__clone', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        $this->valueHolderd4f59 = clone $this->valueHolderd4f59;
    }

    public function __sleep()
    {
        $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, '__sleep', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;

        return array('valueHolderd4f59');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer223fb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer223fb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer223fb && ($this->initializer223fb->__invoke($valueHolderd4f59, $this, 'initializeProxy', array(), $this->initializer223fb) || 1) && $this->valueHolderd4f59 = $valueHolderd4f59;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd4f59;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd4f59;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
