<?php
namespace Biztech\Magemobcart\Controller\Adminhtml\Bannerslider\NewAction;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Adminhtml\Bannerslider\NewAction
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Adminhtml\Bannerslider\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($context);
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
