<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder17804 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer223a3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesde9ab = [
        
    ];

    public function getConnection()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getConnection', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getMetadataFactory', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getExpressionBuilder', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'beginTransaction', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getCache', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getCache();
    }

    public function transactional($func)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'transactional', array('func' => $func), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'wrapInTransaction', array('func' => $func), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'commit', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->commit();
    }

    public function rollback()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'rollback', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getClassMetadata', array('className' => $className), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'createQuery', array('dql' => $dql), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'createNamedQuery', array('name' => $name), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'createQueryBuilder', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'flush', array('entity' => $entity), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'clear', array('entityName' => $entityName), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->clear($entityName);
    }

    public function close()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'close', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->close();
    }

    public function persist($entity)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'persist', array('entity' => $entity), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'remove', array('entity' => $entity), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'refresh', array('entity' => $entity), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'detach', array('entity' => $entity), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'merge', array('entity' => $entity), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getRepository', array('entityName' => $entityName), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'contains', array('entity' => $entity), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getEventManager', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getConfiguration', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'isOpen', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getUnitOfWork', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getProxyFactory', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'initializeObject', array('obj' => $obj), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'getFilters', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'isFiltersStateClean', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'hasFilters', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return $this->valueHolder17804->hasFilters();
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

        $instance->initializer223a3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder17804) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder17804 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder17804->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, '__get', ['name' => $name], $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        if (isset(self::$publicPropertiesde9ab[$name])) {
            return $this->valueHolder17804->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17804;

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

        $targetObject = $this->valueHolder17804;
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
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17804;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder17804;
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
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, '__isset', array('name' => $name), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17804;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder17804;
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
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, '__unset', array('name' => $name), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17804;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder17804;
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
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, '__clone', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        $this->valueHolder17804 = clone $this->valueHolder17804;
    }

    public function __sleep()
    {
        $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, '__sleep', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;

        return array('valueHolder17804');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer223a3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer223a3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer223a3 && ($this->initializer223a3->__invoke($valueHolder17804, $this, 'initializeProxy', array(), $this->initializer223a3) || 1) && $this->valueHolder17804 = $valueHolder17804;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder17804;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder17804;
    }
}
