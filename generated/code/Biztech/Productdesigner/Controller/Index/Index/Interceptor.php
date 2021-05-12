<?php
namespace Biztech\Productdesigner\Controller\Index\Index;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Index\Index
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Catalog\Model\ProductFactory $_productLoader, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Biztech\Productdesigner\Helper\Data $dataHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Filesystem $filesystem, \Magento\Checkout\Model\CartFactory $cartModel, \Magento\Quote\Model\Quote\ItemFactory $quoteItemFactory, \Magento\Sales\Api\OrderItemRepositoryInterface $orderItemRepository, \Magento\Framework\DataObjectFactory $objectFactory, \Biztech\Productdesigner\Model\DesignsFactory $designFactory, \Magento\Framework\Module\Dir\Reader $moduleReader)
    {
        $this->___init();
        parent::__construct($context, $infoHelper, $_productLoader, $resultPageFactory, $layoutFactory, $dataHelper, $storeManager, $scopeConfig, $customerSession, $filesystem, $cartModel, $quoteItemFactory, $orderItemRepository, $objectFactory, $designFactory, $moduleReader);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
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

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        if (!$pluginInfo) {
            return parent::getActionFlag();
        } else {
            return $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        if (!$pluginInfo) {
            return parent::getRequest();
        } else {
            return $this->___callPlugins('getRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        if (!$pluginInfo) {
            return parent::getResponse();
        } else {
            return $this->___callPlugins('getResponse', func_get_args(), $pluginInfo);
        }
    }
}
