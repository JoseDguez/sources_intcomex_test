<?php
namespace Akeneo\Connector\Controller\Adminhtml\Import\RunProduct;

/**
 * Interceptor class for @see \Akeneo\Connector\Controller\Adminhtml\Import\RunProduct
 */
class Interceptor extends \Akeneo\Connector\Controller\Adminhtml\Import\RunProduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Akeneo\Connector\Api\ImportRepositoryInterface $importRepository, \Akeneo\Connector\Helper\Output $output, \Akeneo\Connector\Converter\ArrayToJsonResponseConverter $arrayToJsonResponseConverter, \Akeneo\Connector\Job\Product $jobProduct)
    {
        $this->___init();
        parent::__construct($context, $importRepository, $output, $arrayToJsonResponseConverter, $jobProduct);
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
