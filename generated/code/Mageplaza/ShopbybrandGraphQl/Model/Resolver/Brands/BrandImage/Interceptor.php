<?php
namespace Mageplaza\ShopbybrandGraphQl\Model\Resolver\Brands\BrandImage;

/**
 * Interceptor class for @see \Mageplaza\ShopbybrandGraphQl\Model\Resolver\Brands\BrandImage
 */
class Interceptor extends \Mageplaza\ShopbybrandGraphQl\Model\Resolver\Brands\BrandImage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\Shopbybrand\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($helperData);
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
