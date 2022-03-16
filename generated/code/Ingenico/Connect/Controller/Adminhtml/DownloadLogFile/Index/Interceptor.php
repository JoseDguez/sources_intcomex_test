<?php
namespace Ingenico\Connect\Controller\Adminhtml\DownloadLogFile\Index;

/**
 * Interceptor class for @see \Ingenico\Connect\Controller\Adminhtml\DownloadLogFile\Index
 */
class Interceptor extends \Ingenico\Connect\Controller\Adminhtml\DownloadLogFile\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ingenico\Connect\Model\ConfigInterface $config, \Magento\Backend\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Filesystem\Driver\File $fileDriver, \Magento\Framework\Filesystem\Io\File $fileSystemIo)
    {
        $this->___init();
        parent::__construct($context, $config, $fileFactory, $fileDriver, $fileSystemIo);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
