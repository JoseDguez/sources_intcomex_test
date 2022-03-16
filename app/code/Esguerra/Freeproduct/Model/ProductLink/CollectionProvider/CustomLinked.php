<?php
namespace Esguerra\Freeproduct\Model\ProductLink\CollectionProvider;

class CustomLinked {
    public function getLinkedProducts($product) {
        return $product->getCustomlinkedProducts();
    }
}
