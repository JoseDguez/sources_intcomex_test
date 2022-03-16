<?php
namespace Ingenico\Connect\Command\ProcessEvents;

/**
 * Interceptor class for @see \Ingenico\Connect\Command\ProcessEvents
 */
class Interceptor extends \Ingenico\Connect\Command\ProcessEvents implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ingenico\Connect\Model\Event\Processor $processor, \Magento\Framework\App\State $appState, $name = null)
    {
        $this->___init();
        parent::__construct($processor, $appState, $name);
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
