<?php
namespace Ingenico\Connect\Controller\InlinePayment\ProcessReturn;

/**
 * Interceptor class for @see \Ingenico\Connect\Controller\InlinePayment\ProcessReturn
 */
class Interceptor extends \Ingenico\Connect\Controller\InlinePayment\ProcessReturn implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Ingenico\Connect\Model\ConfigInterface $config, \Psr\Log\LoggerInterface $logger, \Ingenico\Connect\Model\Ingenico\Action\GetInlinePaymentStatus $getInlinePaymentStatus)
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $config, $logger, $getInlinePaymentStatus);
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
