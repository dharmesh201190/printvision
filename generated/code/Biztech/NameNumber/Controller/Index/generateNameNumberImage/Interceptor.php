<?php
namespace Biztech\NameNumber\Controller\Index\generateNameNumberImage;

/**
 * Interceptor class for @see \Biztech\NameNumber\Controller\Index\generateNameNumberImage
 */
class Interceptor extends \Biztech\NameNumber\Controller\Index\generateNameNumberImage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Info $infoHelper, \Biztech\Productdesigner\Helper\Data $pdHelper, \Biztech\Productdesigner\Model\DesignsFactory $design, \Biztech\Productdesigner\Model\Mysql4\Selectionarea\CollectionFactory $selectionareaCollection, \Magento\Framework\Filesystem\DirectoryList $dir, \Biztech\Productdesigner\Model\DesignimagesFactory $designImagesFactory, \Biztech\Productdesigner\Model\Mysql4\DesignOrders\CollectionFactory $designOrderCollection, \Magento\Framework\Filesystem $fileSystem, \Magento\Sales\Model\Order $order, \Biztech\Productdesigner\Model\ResourceModel\MediaGallery\CollectionFactory $mediaGallery, \Biztech\Productdesigner\Model\Mysql4\Designimages\CollectionFactory $designimagesFactory, \Biztech\Productdesigner\Model\Side $side, \Biztech\Productdesigner\Model\Mysql4\Designs\CollectionFactory $designFactory, \Magento\Framework\Event\Manager $manager, \Magento\Framework\DataObjectFactory $objectFactory)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $infoHelper, $pdHelper, $design, $selectionareaCollection, $dir, $designImagesFactory, $designOrderCollection, $fileSystem, $order, $mediaGallery, $designimagesFactory, $side, $designFactory, $manager, $objectFactory);
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
