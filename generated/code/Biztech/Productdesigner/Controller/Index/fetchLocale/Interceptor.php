<?php
namespace Biztech\Productdesigner\Controller\Index\fetchLocale;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Index\fetchLocale
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Index\fetchLocale implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Info $infoHelper)
    {
        $this->___init();
        parent::__construct($context, $scopeConfig, $storeManager, $infoHelper);
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
