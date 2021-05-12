<?php
namespace Biztech\Productdesigner\Controller\ImageUpload\getImageConfiguration;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\ImageUpload\getImageConfiguration
 */
class Interceptor extends \Biztech\Productdesigner\Controller\ImageUpload\getImageConfiguration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Catalog\Model\ProductFactory $_productLoader, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Biztech\Productdesigner\Helper\Data $dataHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Model\Mysql4\Subtabs\CollectionFactory $SubtabsData, \Biztech\Productdesigner\Model\Mysql4\TabsData\CollectionFactory $MaintabsData, \Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\DataObjectFactory $objectFactory)
    {
        $this->___init();
        parent::__construct($context, $infoHelper, $_productLoader, $resultPageFactory, $layoutFactory, $dataHelper, $storeManager, $SubtabsData, $MaintabsData, $resource, $objectFactory);
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
