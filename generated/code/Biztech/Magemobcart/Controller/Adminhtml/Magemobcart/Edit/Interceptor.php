<?php
namespace Biztech\Magemobcart\Controller\Adminhtml\Magemobcart\Edit;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Adminhtml\Magemobcart\Edit
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Adminhtml\Magemobcart\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Biztech\Magemobcart\Model\Magemobcart $magemobcartModel, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $magemobcartModel, $registry);
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
