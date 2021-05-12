<?php
namespace LR\PriceCalculator\Controller\Adminhtml\Items\MassStatus;

/**
 * Interceptor class for @see \LR\PriceCalculator\Controller\Adminhtml\Items\MassStatus
 */
class Interceptor extends \LR\PriceCalculator\Controller\Adminhtml\Items\MassStatus implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \LR\PriceCalculator\Model\ResourceModel\PriceCalculator\CollectionFactory $collectionFactory)
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
