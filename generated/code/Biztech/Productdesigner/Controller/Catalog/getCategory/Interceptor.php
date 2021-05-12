<?php
namespace Biztech\Productdesigner\Controller\Catalog\getCategory;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Catalog\getCategory
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Catalog\getCategory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Catalog\Model\ProductFactory $_productLoader, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Asset\Repository $assetRepo, \Biztech\Productdesigner\Helper\Data $dataHelper, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $catalogCollectionFactory, \Magento\Catalog\Helper\Category $categoryHelper, \Magento\Catalog\Model\Category $catalogModel, \Magento\CatalogInventory\Helper\Stock $stockFilter, \Magento\Catalog\Helper\Image $imagehelper)
    {
        $this->___init();
        parent::__construct($context, $infoHelper, $_productLoader, $storeManager, $assetRepo, $dataHelper, $catalogCollectionFactory, $categoryHelper, $catalogModel, $stockFilter, $imagehelper);
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
