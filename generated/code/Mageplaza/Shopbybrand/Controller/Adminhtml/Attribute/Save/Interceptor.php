<?php
namespace Mageplaza\Shopbybrand\Controller\Adminhtml\Attribute\Save;

/**
 * Interceptor class for @see \Mageplaza\Shopbybrand\Controller\Adminhtml\Attribute\Save
 */
class Interceptor extends \Mageplaza\Shopbybrand\Controller\Adminhtml\Attribute\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Mageplaza\Shopbybrand\Helper\Data $brandHelper, \Mageplaza\Shopbybrand\Model\BrandFactory $brandFactory, \Magento\Framework\Filesystem $fileSystem, \Magento\Framework\Image\AdapterFactory $adapterFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->___init();
        parent::__construct($context, $brandHelper, $brandFactory, $fileSystem, $adapterFactory, $resultPageFactory);
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
