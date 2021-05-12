<?php
namespace Biztech\DesignTemplates\Controller\Adminhtml\Designtemplatecategory\MassDelete;

/**
 * Interceptor class for @see \Biztech\DesignTemplates\Controller\Adminhtml\Designtemplatecategory\MassDelete
 */
class Interceptor extends \Biztech\DesignTemplates\Controller\Adminhtml\Designtemplatecategory\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Biztech\DesignTemplates\Model\Mysql4\Designtemplatecategory\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory);
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
