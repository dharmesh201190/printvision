<?php
namespace Biztech\ThemeColors\Controller\Adminhtml\System\Config\SaveThemeConfiguration;

/**
 * Interceptor class for @see \Biztech\ThemeColors\Controller\Adminhtml\System\Config\SaveThemeConfiguration
 */
class Interceptor extends \Biztech\ThemeColors\Controller\Adminhtml\System\Config\SaveThemeConfiguration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\LayoutInterface $layoutInterface, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Design\Theme\ThemeProviderInterface $themeProvider, \Magento\Framework\Module\Dir\Reader $moduleReader, \Magento\Framework\Filesystem\DirectoryList $dir, \Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($scopeConfig, $layoutInterface, $storeManager, $themeProvider, $moduleReader, $dir, $context, $resultJsonFactory, $logger);
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
