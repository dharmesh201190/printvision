<?php
namespace Biztech\Magemobcart\Controller\Homepage\Index;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Homepage\Index
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Homepage\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Request\Http $request, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Product $productModel, \Magento\Catalog\Model\ProductFactory $productFactory, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Wishlist\Helper\Data $wishlistHelper, \Magento\Review\Model\Review\Summary $reviewSummaryModel, \Magento\Customer\Model\Session $customerSession, \Biztech\Magemobcart\Model\Bannerslider $bannersliderModel, \Biztech\Magemobcart\Model\Offerslider $offersliderModel, \Biztech\Magemobcart\Model\Magemobcart $magemobcartModel, \Magento\Checkout\Model\Cart $cartModel, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\CatalogRule\Model\Rule $catalogruleModel, \Magento\CatalogInventory\Api\StockStateInterface $stockInterface, \Biztech\Magemobcart\Model\Notificationhistory $notificationHistoryModel, \Biztech\Magemobcart\Helper\Notification $notificationHelper, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Framework\Event\Manager $manager, \Magento\Framework\DataObjectFactory $objectFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $request, $storeManager, $productModel, $productFactory, $cartHelper, $stockItemRepository, $imageHelper, $wishlistHelper, $reviewSummaryModel, $customerSession, $bannersliderModel, $offersliderModel, $magemobcartModel, $cartModel, $scopeConfig, $catalogruleModel, $stockInterface, $notificationHistoryModel, $notificationHelper, $localeDate, $formKey, $manager, $objectFactory);
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
