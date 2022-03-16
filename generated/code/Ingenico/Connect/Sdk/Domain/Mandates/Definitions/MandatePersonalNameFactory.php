<?php
namespace Ingenico\Connect\Sdk\Domain\Mandates\Definitions;

/**
 * Factory class for @see \Ingenico\Connect\Sdk\Domain\Mandates\Definitions\MandatePersonalName
 */
class MandatePersonalNameFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Ingenico\\Connect\\Sdk\\Domain\\Mandates\\Definitions\\MandatePersonalName')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Ingenico\Connect\Sdk\Domain\Mandates\Definitions\MandatePersonalName
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
