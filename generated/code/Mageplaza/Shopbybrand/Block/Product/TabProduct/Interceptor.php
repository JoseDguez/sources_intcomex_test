<?php
namespace Mageplaza\Shopbybrand\Block\Product\TabProduct;

/**
 * Interceptor class for @see \Mageplaza\Shopbybrand\Block\Product\TabProduct
 */
class Interceptor extends \Mageplaza\Shopbybrand\Block\Product\TabProduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Mageplaza\Shopbybrand\Helper\Data $helper, \Magento\Catalog\Model\Product\Visibility $visibleProducts, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $postDataHelper, $layerResolver, $categoryRepository, $urlHelper, $productCollectionFactory, $helper, $visibleProducts, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductPrice(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductPrice');
        return $pluginInfo ? $this->___callPlugins('getProductPrice', func_get_args(), $pluginInfo) : parent::getProductPrice($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
