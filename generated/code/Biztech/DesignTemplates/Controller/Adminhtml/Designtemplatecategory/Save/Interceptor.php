<?php
namespace Biztech\DesignTemplates\Controller\Adminhtml\Designtemplatecategory\Save;

/**
 * Interceptor class for @see \Biztech\DesignTemplates\Controller\Adminhtml\Designtemplatecategory\Save
 */
class Interceptor extends \Biztech\DesignTemplates\Controller\Adminhtml\Designtemplatecategory\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Biztech\DesignTemplates\Model\Designtemplatecategory $designtemplatecategory, \Magento\Backend\Model\Session $session, \Magento\Backend\Helper\Js $backend_helper)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $resultForwardFactory, $resultPageFactory, $layoutFactory, $resultLayoutFactory, $designtemplatecategory, $session, $backend_helper);
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
