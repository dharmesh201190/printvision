<?php
namespace Biztech\Magemobcart\Controller\Customer\Getcustomerorderlist;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Customer\Getcustomerorderlist
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Customer\Getcustomerorderlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Framework\App\Request\Http $request, \Magento\Customer\Model\Session $customerSession, \Magento\Sales\Model\ResourceModel\Order\Grid\Collection $orderGridCollection, \Magento\Catalog\Model\ProductFactory $productModel, \Magento\Sales\Model\Order $orderModel, \Magento\Shipping\Helper\Data $shippingHelper, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $cartHelper, $request, $customerSession, $orderGridCollection, $productModel, $orderModel, $shippingHelper, $date, $timezone, $imageHelper, $formKey);
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
