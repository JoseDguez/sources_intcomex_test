<?php
namespace Magento\SalesRule\Model\Rule\Action\Discount\CalculatorFactory;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Rule\Action\Discount\CalculatorFactory
 */
class Interceptor extends \Magento\SalesRule\Model\Rule\Action\Discount\CalculatorFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, array $discountRules = [])
    {
        $this->___init();
        parent::__construct($objectManager, $discountRules);
    }

    /**
     * {@inheritdoc}
     */
    public function create($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($type);
    }
}
