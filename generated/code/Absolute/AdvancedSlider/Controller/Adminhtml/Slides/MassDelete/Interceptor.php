<?php
namespace Absolute\AdvancedSlider\Controller\Adminhtml\Slides\MassDelete;

/**
 * Interceptor class for @see \Absolute\AdvancedSlider\Controller\Adminhtml\Slides\MassDelete
 */
class Interceptor extends \Absolute\AdvancedSlider\Controller\Adminhtml\Slides\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Absolute\AdvancedSlider\Model\ResourceModel\Slides\CollectionFactory $collectionFactory, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $dataPersistor);
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
