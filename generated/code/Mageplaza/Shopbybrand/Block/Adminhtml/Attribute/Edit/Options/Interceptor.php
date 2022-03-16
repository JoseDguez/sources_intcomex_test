<?php
namespace Mageplaza\Shopbybrand\Block\Adminhtml\Attribute\Edit\Options;

/**
 * Interceptor class for @see \Mageplaza\Shopbybrand\Block\Adminhtml\Attribute\Edit\Options
 */
class Interceptor extends \Mageplaza\Shopbybrand\Block\Adminhtml\Attribute\Edit\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Mageplaza\Shopbybrand\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $attrOptionCollectionFactory, $universalFactory, $helper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionValues()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionValues');
        return $pluginInfo ? $this->___callPlugins('getOptionValues', func_get_args(), $pluginInfo) : parent::getOptionValues();
    }
}
