<?php
namespace Codazon\Utility\Controller\Adminhtml\Theme\Active;

/**
 * Interceptor class for @see \Codazon\Utility\Controller\Adminhtml\Theme\Active
 */
class Interceptor extends \Codazon\Utility\Controller\Adminhtml\Theme\Active implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Codazon\ThemeOptions\Framework\App\ConfigFactory $themeConfigFactory, \Magento\Config\Model\ConfigFactory $configFactory, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry)
    {
        $this->___init();
        parent::__construct($context, $themeConfigFactory, $configFactory, $indexerRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
