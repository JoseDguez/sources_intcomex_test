<?php
namespace Ingenico\Connect\Controller\Adminhtml\Api\TestConnection;

/**
 * Interceptor class for @see \Ingenico\Connect\Controller\Adminhtml\Api\TestConnection
 */
class Interceptor extends \Ingenico\Connect\Controller\Adminhtml\Api\TestConnection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ingenico\Connect\Model\Config $epaymentsConfig, \Magento\Store\Model\StoreManager $storeManager, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Ingenico\Connect\Model\Ingenico\Api\ClientInterface $ingenicoClient)
    {
        $this->___init();
        parent::__construct($context, $epaymentsConfig, $storeManager, $jsonFactory, $ingenicoClient);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
