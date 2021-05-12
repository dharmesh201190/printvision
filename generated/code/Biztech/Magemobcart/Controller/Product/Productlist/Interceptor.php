<?php
namespace Biztech\Magemobcart\Controller\Product\Productlist;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Product\Productlist
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Product\Productlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Request\Http $request, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Product $productModel, \Magento\Catalog\Model\ProductFactory $productFactory, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Wishlist\Helper\Data $wishlistHelper, \Magento\Review\Model\Review\Summary $reviewSummaryModel, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\CatalogInventory\Api\StockRegistryInterface $stockApiRepository, \Magento\Framework\Event\Manager $manager, \Magento\Framework\DataObjectFactory $objectFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $request, $storeManager, $productModel, $productFactory, $cartHelper, $stockItemRepository, $imageHelper, $wishlistHelper, $reviewSummaryModel, $scopeConfig, $formKey, $stockApiRepository, $manager, $objectFactory);
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
