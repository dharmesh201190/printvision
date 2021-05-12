<?php
namespace Biztech\Magemobcart\Controller\Customer\Getorderdetail;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Customer\Getorderdetail
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Customer\Getorderdetail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Framework\App\Request\Http $request, \Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Product $productModel, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Sales\Model\Order $orderModel, \Magento\Shipping\Helper\Data $shippingHelper, \Magento\Downloadable\Model\Link\Purchased $downloadableLinkPurchased, \Magento\Sales\Model\Order\Item $orderItemModel, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Directory\Model\Country $directoryModel, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Framework\Event\Manager $manager, \Magento\Framework\DataObjectFactory $objectFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $cartHelper, $request, $customerSession, $storeManager, $productModel, $productFactory, $orderModel, $shippingHelper, $downloadableLinkPurchased, $orderItemModel, $timezone, $imageHelper, $directoryModel, $formKey, $manager, $objectFactory);
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
