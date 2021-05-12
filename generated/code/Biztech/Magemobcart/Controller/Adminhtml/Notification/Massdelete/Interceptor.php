<?php
namespace Biztech\Magemobcart\Controller\Adminhtml\Notification\Massdelete;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Adminhtml\Notification\Massdelete
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Adminhtml\Notification\Massdelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Biztech\Magemobcart\Model\Notification $notificationModel, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $notificationModel, $registry);
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
