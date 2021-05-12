<?php
namespace Biztech\Productdesigner\Controller\Designs\SaveDesign;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Designs\SaveDesign
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Designs\SaveDesign implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Catalog\Helper\Image $helper, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Filesystem\DirectoryList $dir, \Biztech\Productdesigner\Helper\Data $pdHelper, \Magento\Customer\Model\Session $session, \Biztech\Productdesigner\Model\Mysql4\Designs\CollectionFactory $designCollectionFactory, \Magento\Framework\Event\Manager $manager)
    {
        $this->___init();
        parent::__construct($context, $helper, $infoHelper, $storeManager, $dir, $pdHelper, $session, $designCollectionFactory, $manager);
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
