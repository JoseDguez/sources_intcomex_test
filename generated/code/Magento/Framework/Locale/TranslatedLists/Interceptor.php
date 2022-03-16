<?php
namespace Magento\Framework\Locale\TranslatedLists;

/**
 * Interceptor class for @see \Magento\Framework\Locale\TranslatedLists
 */
class Interceptor extends \Magento\Framework\Locale\TranslatedLists implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Locale\ConfigInterface $config, \Magento\Framework\Locale\ResolverInterface $localeResolver, $locale = null)
    {
        $this->___init();
        parent::__construct($config, $localeResolver, $locale);
    }

    /**
     * {@inheritdoc}
     */
    public function getCountryTranslation($value, $locale = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountryTranslation');
        return $pluginInfo ? $this->___callPlugins('getCountryTranslation', func_get_args(), $pluginInfo) : parent::getCountryTranslation($value, $locale);
    }
}
