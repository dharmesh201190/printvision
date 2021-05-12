<?php
namespace Biztech\ThemeColors\Controller\Index\getPageConfiguration;

/**
 * Interceptor class for @see \Biztech\ThemeColors\Controller\Index\getPageConfiguration
 */
class Interceptor extends \Biztech\ThemeColors\Controller\Index\getPageConfiguration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Data $dataHelper, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Theme\Block\Html\Header\Logo $logo, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfigInterface)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $dataHelper, $infoHelper, $logo, $scopeConfigInterface);
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
