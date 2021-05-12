<?php
namespace Biztech\Magemobcart\Controller\Homepage\Getbestsellers;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Homepage\Getbestsellers
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Homepage\Getbestsellers implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Request\Http $request, \Magento\Catalog\Model\Product $productModel, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Wishlist\Helper\Data $wishlistHelper, \Magento\Review\Model\Review\Summary $reviewSummaryModel, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\CatalogRule\Model\Rule $catalogruleModel, \Magento\CatalogInventory\Api\StockStateInterface $stockInterface, \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository, \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $request, $productModel, $cartHelper, $imageHelper, $wishlistHelper, $reviewSummaryModel, $customerSession, $scopeConfig, $catalogruleModel, $stockInterface, $stockItemRepository, $formKey);
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
