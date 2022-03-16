<?php
namespace Ingenico\Connect\Controller\Webhooks\Payment;

/**
 * Interceptor class for @see \Ingenico\Connect\Controller\Webhooks\Payment
 */
class Interceptor extends \Ingenico\Connect\Controller\Webhooks\Payment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Ingenico\Connect\Model\Ingenico\Webhook\Event\PaymentResolver $paymentResolver, \Ingenico\Connect\Model\Ingenico\Webhook\Handler $webhookHandler)
    {
        $this->___init();
        parent::__construct($context, $logger, $paymentResolver, $webhookHandler);
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
