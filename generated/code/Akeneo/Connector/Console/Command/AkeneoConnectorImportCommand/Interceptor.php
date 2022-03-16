<?php
namespace Akeneo\Connector\Console\Command\AkeneoConnectorImportCommand;

/**
 * Interceptor class for @see \Akeneo\Connector\Console\Command\AkeneoConnectorImportCommand
 */
class Interceptor extends \Akeneo\Connector\Console\Command\AkeneoConnectorImportCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Akeneo\Connector\Api\ImportRepositoryInterface $importRepository, \Magento\Framework\App\State $appState, \Akeneo\Connector\Helper\Config $configHelper, $name = null)
    {
        $this->___init();
        parent::__construct($importRepository, $appState, $configHelper, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
