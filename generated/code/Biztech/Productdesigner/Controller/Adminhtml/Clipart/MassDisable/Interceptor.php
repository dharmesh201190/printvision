<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Clipart\MassDisable;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Clipart\MassDisable
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Clipart\MassDisable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Biztech\Productdesigner\Model\Mysql4\Clipart\CollectionFactory $collectionFactory, \Biztech\Productdesigner\Model\ClipartFactory $clipartFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $clipartFactory);
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
