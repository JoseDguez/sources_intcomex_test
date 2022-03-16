<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\CartInterface
 */
class CartExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CartExtensionInterface
{
    /**
     * @return \Magento\Quote\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments()
    {
        return $this->_get('shipping_assignments');
    }

    /**
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments)
    {
        $this->setData('shipping_assignments', $shippingAssignments);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKlMaskedId()
    {
        return $this->_get('kl_masked_id');
    }

    /**
     * @param string $klMaskedId
     * @return $this
     */
    public function setKlMaskedId($klMaskedId)
    {
        $this->setData('kl_masked_id', $klMaskedId);
        return $this;
    }
}
