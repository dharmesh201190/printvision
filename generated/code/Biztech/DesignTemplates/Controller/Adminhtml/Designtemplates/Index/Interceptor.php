<?php
namespace Biztech\DesignTemplates\Controller\Adminhtml\Designtemplates\Index;

/**
 * Interceptor class for @see \Biztech\DesignTemplates\Controller\Adminhtml\Designtemplates\Index
 */
class Interceptor extends \Biztech\DesignTemplates\Controller\Adminhtml\Designtemplates\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Catalog\Model\ProductFactory $_productLoader, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Biztech\Productdesigner\Helper\Data $dataHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Filesystem $filesystem, \Biztech\DesignTemplates\Helper\Template $templateHelper, \Biztech\DesignTemplates\Model\Mysql4\Designtemplatecategory\CollectionFactory $templateCategoryCollection)
    {
        $this->___init();
        parent::__construct($context, $infoHelper, $_productLoader, $resultPageFactory, $layoutFactory, $dataHelper, $storeManager, $scopeConfig, $customerSession, $filesystem, $templateHelper, $templateCategoryCollection);
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
