<?php
namespace Esguerra\Freeproduct\Ui\DataProvider\Product\Related;

class CustomLinkedDataProvider extends \Magento\Catalog\Ui\DataProvider\Product\Related\AbstractDataProvider
{
    protected function getLinkType() {
        return 'clustomlinked';
    }
}
