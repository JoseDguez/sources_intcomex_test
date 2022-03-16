<?php
namespace Mageplaza\Shopbybrand\Controller\Router;

/**
 * Interceptor class for @see \Mageplaza\Shopbybrand\Controller\Router
 */
class Interceptor extends \Mageplaza\Shopbybrand\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Mageplaza\Shopbybrand\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($actionFactory, $helper);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        return $pluginInfo ? $this->___callPlugins('match', func_get_args(), $pluginInfo) : parent::match($request);
    }
}
