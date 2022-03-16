<?php
namespace Mageplaza\Shopbybrand\Controller\Adminhtml\Attribute\Update;

/**
 * Interceptor class for @see \Mageplaza\Shopbybrand\Controller\Adminhtml\Attribute\Update
 */
class Interceptor extends \Mageplaza\Shopbybrand\Controller\Adminhtml\Attribute\Update implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Product\Attribute\Repository $productRepository, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\Shopbybrand\Helper\Data $brandHelper, \Mageplaza\Shopbybrand\Model\BrandFactory $brandFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonHelper, $storeManager, $productRepository, $resultPageFactory, $brandHelper, $brandFactory);
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
