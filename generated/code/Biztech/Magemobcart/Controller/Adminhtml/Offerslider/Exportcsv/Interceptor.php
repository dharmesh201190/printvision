<?php
namespace Biztech\Magemobcart\Controller\Adminhtml\Offerslider\Exportcsv;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Adminhtml\Offerslider\Exportcsv
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Adminhtml\Offerslider\Exportcsv implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Module\Manager $moduleManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\Config $catalogConfig, \Magento\Framework\App\Request\Http $request, \Magento\Framework\App\ResourceConnection $resourceConnection)
    {
        $this->___init();
        parent::__construct($context, $moduleManager, $scopeConfig, $resultPageFactory, $productFactory, $catalogConfig, $request, $resourceConnection);
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
