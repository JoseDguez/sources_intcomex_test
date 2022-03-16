<?php
namespace Magento\Customer\Api\Data;

/**
 * Extension class for @see \Magento\Customer\Api\Data\AddressInterface
 */
class AddressExtension extends \Magento\Framework\Api\AbstractSimpleObject implements AddressExtensionInterface
{
    /**
     * @return string|null
     */
    public function getFilterList()
    {
        return $this->_get('filter_list');
    }

    /**
     * @param string $filterList
     * @return $this
     */
    public function setFilterList($filterList)
    {
        $this->setData('filter_list', $filterList);
        return $this;
    }
}
