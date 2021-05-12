<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\generateSvg;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\generateSvg
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\generateSvg implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Api\OrderItemRepositoryInterface $orderItemRepository, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Info $infoHelper, \Biztech\Productdesigner\Helper\Data $dataHelper, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($orderItemRepository, $layoutFactory, $storeManager, $infoHelper, $dataHelper, $scopeConfig, $context);
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
