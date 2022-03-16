<?php
namespace Mageplaza\Shopbybrand\Controller\Adminhtml\Attribute\View;

/**
 * Interceptor class for @see \Mageplaza\Shopbybrand\Controller\Adminhtml\Attribute\View
 */
class Interceptor extends \Mageplaza\Shopbybrand\Controller\Adminhtml\Attribute\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Model\Product\Attribute\Repository $productRepository, \Mageplaza\Shopbybrand\Helper\Data $brandHelper)
    {
        $this->___init();
        parent::__construct($context, $productRepository, $brandHelper);
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
