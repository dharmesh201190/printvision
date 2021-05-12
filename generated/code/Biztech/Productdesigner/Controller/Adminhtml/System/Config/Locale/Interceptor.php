<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\System\Config\Locale;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\System\Config\Locale
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\System\Config\Locale implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Filesystem\DirectoryList $dir, \Biztech\Productdesigner\Helper\Data $helper, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Psr\Log\LoggerInterface $logger, \Magento\Framework\View\Design\Theme\ThemeProviderInterface $themeProvider)
    {
        $this->___init();
        parent::__construct($context, $dir, $helper, $scopeConfig, $resultJsonFactory, $storeManager, $logger, $themeProvider);
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
