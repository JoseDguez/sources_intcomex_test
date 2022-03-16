<?php
namespace Mageplaza\ShopbybrandGraphQl\Model\Resolver\BrandCategory;

/**
 * Interceptor class for @see \Mageplaza\ShopbybrandGraphQl\Model\Resolver\BrandCategory
 */
class Interceptor extends \Mageplaza\ShopbybrandGraphQl\Model\Resolver\BrandCategory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\Shopbybrand\Helper\Data $helperData, \Mageplaza\Shopbybrand\Model\BrandRepository $brandRepository)
    {
        $this->___init();
        parent::__construct($helperData, $brandRepository);
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
