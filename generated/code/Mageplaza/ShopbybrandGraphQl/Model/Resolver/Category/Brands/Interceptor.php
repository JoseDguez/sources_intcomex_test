<?php
namespace Mageplaza\ShopbybrandGraphQl\Model\Resolver\Category\Brands;

/**
 * Interceptor class for @see \Mageplaza\ShopbybrandGraphQl\Model\Resolver\Category\Brands
 */
class Interceptor extends \Mageplaza\ShopbybrandGraphQl\Model\Resolver\Category\Brands implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\Shopbybrand\Helper\Data $helperData, \Mageplaza\Shopbybrand\Model\CategoryFactory $categoryFactory)
    {
        $this->___init();
        parent::__construct($helperData, $categoryFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
