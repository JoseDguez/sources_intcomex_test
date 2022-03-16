<?php
namespace Akeneo\Connector\Controller\Adminhtml\Log\MassDelete;

/**
 * Interceptor class for @see \Akeneo\Connector\Controller\Adminhtml\Log\MassDelete
 */
class Interceptor extends \Akeneo\Connector\Controller\Adminhtml\Log\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Akeneo\Connector\Api\LogRepositoryInterface $logRepository, \Akeneo\Connector\Model\ResourceModel\Log\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $logRepository, $collectionFactory);
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
