<?php
namespace Magento\Customer\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Customer\Api\Data\AddressInterface
 */
interface AddressExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getFilterList();

    /**
     * @param string $filterList
     * @return $this
     */
    public function setFilterList($filterList);
}
