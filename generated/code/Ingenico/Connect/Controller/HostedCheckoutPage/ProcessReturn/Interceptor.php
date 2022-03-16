<?php
namespace Ingenico\Connect\Controller\HostedCheckoutPage\ProcessReturn;

/**
 * Interceptor class for @see \Ingenico\Connect\Controller\HostedCheckoutPage\ProcessReturn
 */
class Interceptor extends \Ingenico\Connect\Controller\HostedCheckoutPage\ProcessReturn implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Session\SessionManagerInterface $checkoutSession, \Ingenico\Connect\Model\Ingenico\Action\GetHostedCheckoutStatus $checkoutStatus, \Ingenico\Connect\Model\ConfigInterface $config, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $checkoutStatus, $config, $logger);
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
