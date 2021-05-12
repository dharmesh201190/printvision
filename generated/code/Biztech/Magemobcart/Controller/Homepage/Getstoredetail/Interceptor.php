<?php
namespace Biztech\Magemobcart\Controller\Homepage\Getstoredetail;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Homepage\Getstoredetail
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Homepage\Getstoredetail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Cart $cartModel, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, \Magento\Cms\Model\PageFactory $cmspageModel, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Cms\Model\Template\FilterProvider $filterProvider, \Magento\Framework\DataObjectFactory $objectFactory, \Magento\Framework\Event\Manager $manager)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $storeManager, $cartHelper, $customerSession, $cartModel, $scopeConfig, $localeCurrency, $cmspageModel, $request, $formKey, $filterProvider, $objectFactory, $manager);
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
