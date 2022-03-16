<?php
namespace Mageplaza\Shopbybrand\Controller\Category\View;

/**
 * Interceptor class for @see \Mageplaza\Shopbybrand\Controller\Category\View
 */
class Interceptor extends \Mageplaza\Shopbybrand\Controller\Category\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $coreRegistry, \Mageplaza\Shopbybrand\Model\CategoryFactory $categoryFactory, \Mageplaza\Shopbybrand\Model\ResourceModel\Category $categoryResource, \Mageplaza\Shopbybrand\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $resultForwardFactory, $resultPageFactory, $coreRegistry, $categoryFactory, $categoryResource, $helper);
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
