<?php
namespace Biztech\Magemobcart\Controller\Adminhtml\Notification\Exportxml;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Adminhtml\Notification\Exportxml
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Adminhtml\Notification\Exportxml implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Biztech\Magemobcart\Model\Notification $notificationModel)
    {
        $this->___init();
        parent::__construct($context, $notificationModel);
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
