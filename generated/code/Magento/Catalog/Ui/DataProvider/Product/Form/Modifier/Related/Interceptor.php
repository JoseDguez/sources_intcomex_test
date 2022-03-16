<?php
namespace Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Related;

/**
 * Interceptor class for @see \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Related
 */
class Interceptor extends \Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\Related implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Locator\LocatorInterface $locator, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Catalog\Api\ProductLinkRepositoryInterface $productLinkRepository, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Catalog\Model\Product\Attribute\Source\Status $status, \Magento\Eav\Api\AttributeSetRepositoryInterface $attributeSetRepository, $scopeName = '', $scopePrefix = '')
    {
        $this->___init();
        parent::__construct($locator, $urlBuilder, $productLinkRepository, $productRepository, $imageHelper, $status, $attributeSetRepository, $scopeName, $scopePrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function modifyMeta(array $meta)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modifyMeta');
        return $pluginInfo ? $this->___callPlugins('modifyMeta', func_get_args(), $pluginInfo) : parent::modifyMeta($meta);
    }

    /**
     * {@inheritdoc}
     */
    public function modifyData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modifyData');
        return $pluginInfo ? $this->___callPlugins('modifyData', func_get_args(), $pluginInfo) : parent::modifyData($data);
    }
}
