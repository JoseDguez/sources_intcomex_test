<?php
namespace Mageplaza\Shopbybrand\Controller\Adminhtml\Category\Edit;

/**
 * Interceptor class for @see \Mageplaza\Shopbybrand\Controller\Adminhtml\Category\Edit
 */
class Interceptor extends \Mageplaza\Shopbybrand\Controller\Adminhtml\Category\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\Shopbybrand\Helper\Data $data, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\Registry $registry, \Mageplaza\Shopbybrand\Model\CategoryFactory $categoryFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($data, $jsonHelper, $pageFactory, $registry, $categoryFactory, $context);
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
