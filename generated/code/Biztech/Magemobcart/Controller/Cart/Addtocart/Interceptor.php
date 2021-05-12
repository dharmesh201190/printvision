<?php
namespace Biztech\Magemobcart\Controller\Cart\Addtocart;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Cart\Addtocart
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Cart\Addtocart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Request\Http $request, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Cart $customerCart, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $request, $cartHelper, $customerSession, $customerCart, $checkoutSession, $productRepository, $scopeConfig, $formKey);
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
