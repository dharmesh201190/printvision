<?php
namespace Biztech\Productdesigner\Controller\Cart\getCustomOptions;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Cart\getCustomOptions
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Cart\getCustomOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Biztech\Productdesigner\Helper\Data $helper, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, \Magento\Catalog\Model\Product $productManager, \Magento\Quote\Model\Quote\ItemFactory $quoteItemFactory)
    {
        $this->___init();
        parent::__construct($context, $helper, $infoHelper, $storeManager, $directoryHelper, $localeCurrency, $productManager, $quoteItemFactory);
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
