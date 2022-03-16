<?php
namespace Esguerra\Freeproduct\Model\ProductLink\CollectionProvider\CustomLinked;

/**
 * Interceptor class for @see \Esguerra\Freeproduct\Model\ProductLink\CollectionProvider\CustomLinked
 */
class Interceptor extends \Esguerra\Freeproduct\Model\ProductLink\CollectionProvider\CustomLinked implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkedProducts($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLinkedProducts');
        return $pluginInfo ? $this->___callPlugins('getLinkedProducts', func_get_args(), $pluginInfo) : parent::getLinkedProducts($product);
    }
}
