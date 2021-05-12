<?php
namespace Biztech\Productdesigner\Controller\Index\loadProduct;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Index\loadProduct
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Index\loadProduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Catalog\Model\ProductFactory $_productLoader, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Biztech\Productdesigner\Helper\Data $dataHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Filesystem $filesystem, \Magento\Checkout\Model\CartFactory $cartModel, \Magento\Quote\Model\Quote\ItemFactory $quoteItemFactory, \Magento\Sales\Api\OrderItemRepositoryInterface $orderItemRepository, \Magento\Framework\DataObjectFactory $objectFactory, \Biztech\Productdesigner\Model\DesignsFactory $designFactory, \Magento\Framework\Module\Dir\Reader $moduleReader)
    {
        $this->___init();
        parent::__construct($context, $infoHelper, $_productLoader, $resultPageFactory, $layoutFactory, $dataHelper, $storeManager, $scopeConfig, $customerSession, $filesystem, $cartModel, $quoteItemFactory, $orderItemRepository, $objectFactory, $designFactory, $moduleReader);
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
