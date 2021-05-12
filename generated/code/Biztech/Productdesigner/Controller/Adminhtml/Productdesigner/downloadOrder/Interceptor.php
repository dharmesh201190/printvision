<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\downloadOrder;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\downloadOrder
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\downloadOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Sales\Model\Order $order, \Magento\Framework\Filesystem $fileSystem, \Biztech\Productdesigner\Model\Mysql4\DesignOrders\CollectionFactory $designOrderFactory, \Biztech\Productdesigner\Model\ResourceModel\MediaGallery\CollectionFactory $mediaGallery, \Biztech\Productdesigner\Model\Side $side, \Biztech\Productdesigner\Model\Mysql4\Designimages\CollectionFactory $designimagesFactory, \Biztech\Productdesigner\Helper\Info $infoHelper, \Biztech\Productdesigner\Helper\Order $orderHelper, \Biztech\Productdesigner\Helper\Data $helper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\ProductFactory $_productLoade, \Biztech\Productdesigner\Model\Mysql4\DesignOrders\CollectionFactory $designOrdersFactory, \Biztech\Productdesigner\Model\DesignsFactory $designsFactory)
    {
        $this->___init();
        parent::__construct($context, $order, $fileSystem, $designOrderFactory, $mediaGallery, $side, $designimagesFactory, $infoHelper, $orderHelper, $helper, $storeManager, $_productLoade, $designOrdersFactory, $designsFactory);
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
