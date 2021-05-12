<?php
namespace Biztech\Productdesigner\Controller\Index\getConfiguration;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Index\getConfiguration
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Index\getConfiguration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Data $helper, \Biztech\Productdesigner\Helper\Info $infoHelper)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $helper, $infoHelper);
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
