<?php
namespace Biztech\Designerapp\Controller\Product\Productdetail;

/**
 * Interceptor class for @see \Biztech\Designerapp\Controller\Product\Productdetail
 */
class Interceptor extends \Biztech\Designerapp\Controller\Product\Productdetail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Request\Http $request, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Product $productModel, \Magento\Catalog\Model\ProductFactory $productFactory, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Wishlist\Helper\Data $wishlistHelper, \Magento\Review\Model\Review\Summary $reviewSummaryModel, \Magento\Catalog\Helper\Output $helperOutput, \Magento\Swatches\Helper\Data $swatchHelper, \Magento\Downloadable\Model\ResourceModel\Sample\CollectionFactory $downloadableFactory, \Magento\Framework\Registry $frameworkRegistry, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Framework\Event\Manager $manager, \Magento\Framework\DataObjectFactory $objectFactory, \Magento\CatalogInventory\Api\StockRegistryInterface $stockApiRepository)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $request, $storeManager, $productModel, $productFactory, $cartHelper, $stockItemRepository, $imageHelper, $wishlistHelper, $reviewSummaryModel, $helperOutput, $swatchHelper, $downloadableFactory, $frameworkRegistry, $stockRegistry, $formKey, $manager, $objectFactory, $stockApiRepository);
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
