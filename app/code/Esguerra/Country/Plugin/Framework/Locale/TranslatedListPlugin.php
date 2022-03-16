<?php

namespace Esguerra\Country\Plugin\Framework\Locale;

use Magento\Framework\Locale\ListsInterface;

/**
 * @inheritdoc
 */
class TranslatedListPlugin
{
    /**
     * @inheritdoc
     */
    public function aroundGetCountryTranslation(
        ListsInterface $subject,
        callable $proceed,
        $value,
        $locale = null
    ) {
        if ($value == 'VR') {
            /* need to add $locale selector */
            return 'VIRTUAL COUNTRY';
        }
        return $proceed($value, $locale);
    }
}
