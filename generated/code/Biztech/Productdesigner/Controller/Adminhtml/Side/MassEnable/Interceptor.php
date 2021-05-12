<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Side\MassEnable;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Side\MassEnable
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Side\MassEnable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Biztech\Productdesigner\Model\Mysql4\Side\CollectionFactory $collectionFactory, \Biztech\Productdesigner\Model\SideFactory $sideFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $sideFactory);
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
