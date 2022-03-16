<?php
namespace Mageplaza\Shopbybrand\Controller\Index\View;

/**
 * Interceptor class for @see \Mageplaza\Shopbybrand\Controller\Index\View
 */
class Interceptor extends \Mageplaza\Shopbybrand\Controller\Index\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\Shopbybrand\Helper\Data $helper, \Mageplaza\Shopbybrand\Model\BrandFactory $brandFactory, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Json\Helper\Data $jsonHelper)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $helper, $brandFactory, $coreRegistry, $resultForwardFactory, $categoryRepository, $storeManager, $jsonHelper);
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
