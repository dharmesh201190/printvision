<?php
namespace Biztech\Magemobcart\Controller\Checkout\Savepaymentmobile;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Checkout\Savepaymentmobile
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Checkout\Savepaymentmobile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Request\Http $request, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Customer\Model\Session $customerSession, \Biztech\Magemobcart\Model\Devicedata $deviceDataModel, \Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\Checkout\Model\Session $cartSession, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Shipping\Model\Config $shipconfig, \Magento\Checkout\Model\Cart $cart, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Checkout\Model\Type\Onepage $onepageCheckout, \Magento\Paypal\Model\Api\Type\Factory $apiTypeFactory, \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $request, $cartHelper, $customerSession, $deviceDataModel, $resourceConnection, $cartSession, $scopeConfig, $shipconfig, $cart, $paymentHelper, $onepageCheckout, $apiTypeFactory, $formKey);
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
