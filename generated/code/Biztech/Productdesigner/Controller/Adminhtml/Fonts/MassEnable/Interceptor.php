<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Fonts\MassEnable;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Fonts\MassEnable
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Fonts\MassEnable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Biztech\Productdesigner\Model\Mysql4\Fonts\CollectionFactory $collectionFactory, \Biztech\Productdesigner\Model\FontsFactory $fontsFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $fontsFactory);
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
