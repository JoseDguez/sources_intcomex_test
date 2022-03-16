<?php
namespace Magento\Eav\Block\Adminhtml\Attribute\Edit\Options\Options;

/**
 * Interceptor class for @see \Magento\Eav\Block\Adminhtml\Attribute\Edit\Options\Options
 */
class Interceptor extends \Magento\Eav\Block\Adminhtml\Attribute\Edit\Options\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory, \Magento\Framework\Validator\UniversalFactory $universalFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $attrOptionCollectionFactory, $universalFactory, $data);
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
