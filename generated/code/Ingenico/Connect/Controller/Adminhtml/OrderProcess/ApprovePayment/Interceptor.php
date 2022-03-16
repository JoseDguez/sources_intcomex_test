<?php
namespace Ingenico\Connect\Controller\Adminhtml\OrderProcess\ApprovePayment;

/**
 * Interceptor class for @see \Ingenico\Connect\Controller\Adminhtml\OrderProcess\ApprovePayment
 */
class Interceptor extends \Ingenico\Connect\Controller\Adminhtml\OrderProcess\ApprovePayment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Ingenico\Connect\Model\Ingenico\Action\ApproveChallengedPayment $approveChallengedPayment, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $orderRepository, $approveChallengedPayment, $logger);
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
