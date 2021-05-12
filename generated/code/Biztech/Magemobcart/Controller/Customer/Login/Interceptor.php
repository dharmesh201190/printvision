<?php
namespace Biztech\Magemobcart\Controller\Customer\Login;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Customer\Login
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Customer\Login implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Request\Http $request, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Customer $customerModel, \Magento\Checkout\Model\Cart $cartModel, \Magento\Newsletter\Model\Subscriber $newsletterModel, \Magento\Customer\Api\AccountManagementInterface $accountManagementInterface, \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $request, $cartHelper, $customerSession, $customerModel, $cartModel, $newsletterModel, $accountManagementInterface, $formKey);
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
