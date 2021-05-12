<?php
namespace Biztech\EditablePdf\Controller\Index\generateSvg;

/**
 * Interceptor class for @see \Biztech\EditablePdf\Controller\Index\generateSvg
 */
class Interceptor extends \Biztech\EditablePdf\Controller\Index\generateSvg implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Info $infoHelper, \Biztech\Productdesigner\Model\DesignsFactory $design, \Magento\Framework\Filesystem\DirectoryList $dir, \Biztech\Productdesigner\Model\DesignimagesFactory $designImagesFactory, \Biztech\Productdesigner\Model\Mysql4\DesignOrders\CollectionFactory $designOrderCollection)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $infoHelper, $design, $dir, $designImagesFactory, $designOrderCollection);
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
