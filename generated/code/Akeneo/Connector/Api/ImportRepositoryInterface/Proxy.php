<?php
namespace Akeneo\Connector\Api\ImportRepositoryInterface;

/**
 * Proxy class for @see \Akeneo\Connector\Api\ImportRepositoryInterface
 */
class Proxy implements \Akeneo\Connector\Api\ImportRepositoryInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Akeneo\Connector\Api\ImportRepositoryInterface
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Akeneo\\Connector\\Api\\ImportRepositoryInterface', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Akeneo\Connector\Api\ImportRepositoryInterface
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function add(\Magento\Framework\DataObject $import)
    {
        return $this->_getSubject()->add($import);
    }

    /**
     * {@inheritdoc}
     */
    public function getByCode($code)
    {
        return $this->_getSubject()->getByCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getList()
    {
        return $this->_getSubject()->getList();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteByCode($code)
    {
        return $this->_getSubject()->deleteByCode($code);
    }
}
