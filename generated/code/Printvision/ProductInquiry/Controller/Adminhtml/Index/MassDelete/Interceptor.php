<?php
namespace Printvision\ProductInquiry\Controller\Adminhtml\Index\MassDelete;

/**
 * Interceptor class for @see \Printvision\ProductInquiry\Controller\Adminhtml\Index\MassDelete
 */
class Interceptor extends \Printvision\ProductInquiry\Controller\Adminhtml\Index\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Printvision\ProductInquiry\Model\ResourceModel\ProductInquiry\CollectionFactory $collectionFactory)
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
