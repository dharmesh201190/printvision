<?php
namespace Biztech\Productdesigner\Controller\Index\loadPrice;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Index\loadPrice
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Index\loadPrice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Data $helper, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Pricing\Helper\Data $priceHelper, \Magento\Catalog\Helper\Data $taxprice, \Magento\Tax\Helper\Data $taxhelper, \Magento\Customer\Model\Session $customerSession, \Magento\Catalog\Model\ProductFactory $productModel, \Magento\Tax\Model\Calculation $calculationModel, \Magento\ConfigurableProduct\Model\Product\Type\ConfigurableFactory $productTypeModel)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $helper, $infoHelper, $directoryHelper, $priceHelper, $taxprice, $taxhelper, $customerSession, $productModel, $calculationModel, $productTypeModel);
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
