<?php
namespace Ingenico\Connect\Controller\Adminhtml\OrderProcess\ApproveRefund;

/**
 * Interceptor class for @see \Ingenico\Connect\Controller\Adminhtml\OrderProcess\ApproveRefund
 */
class Interceptor extends \Ingenico\Connect\Controller\Adminhtml\OrderProcess\ApproveRefund implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Sales\Api\CreditmemoRepositoryInterface $creditmemoRepository, \Ingenico\Connect\Model\Ingenico\Action\Refund\ApproveRefund $approveRefund, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $creditmemoRepository, $approveRefund, $logger);
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
