<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\downloadAllDesignImages;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\downloadAllDesignImages
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\downloadAllDesignImages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Sales\Model\Order $order, \Biztech\Productdesigner\Model\Mysql4\Designimages\Collection $designCollection, \Magento\Framework\Filesystem $fileSystem, \Magento\Framework\App\Config\ScopeConfigInterface $store)
    {
        $this->___init();
        parent::__construct($context, $order, $designCollection, $fileSystem, $store);
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
