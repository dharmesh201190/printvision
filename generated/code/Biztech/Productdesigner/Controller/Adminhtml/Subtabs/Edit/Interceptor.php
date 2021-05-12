<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Subtabs\Edit;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Subtabs\Edit
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Subtabs\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Biztech\Productdesigner\Model\SubtabsFactory $subtabsFactory, \Biztech\Productdesigner\Model\Mysql4\Subtabs\CollectionFactory $subtabsCollection, \Magento\Backend\Model\Session $session)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $resultForwardFactory, $resultPageFactory, $subtabsFactory, $subtabsCollection, $session);
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
