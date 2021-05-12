<?php
namespace Prince\Productattach\Controller\Adminhtml\Fileicon\Save;

/**
 * Interceptor class for @see \Prince\Productattach\Controller\Adminhtml\Fileicon\Save
 */
class Interceptor extends \Prince\Productattach\Controller\Adminhtml\Fileicon\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Prince\Productattach\Model\FileiconFactory $fileiconFactory)
    {
        $this->___init();
        parent::__construct($context, $dataPersistor, $fileiconFactory);
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
