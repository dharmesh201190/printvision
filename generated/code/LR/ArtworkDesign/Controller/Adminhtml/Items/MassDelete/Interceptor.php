<?php
namespace LR\ArtworkDesign\Controller\Adminhtml\Items\MassDelete;

/**
 * Interceptor class for @see \LR\ArtworkDesign\Controller\Adminhtml\Items\MassDelete
 */
class Interceptor extends \LR\ArtworkDesign\Controller\Adminhtml\Items\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \LR\ArtworkDesign\Model\ResourceModel\ArtworkDesign\CollectionFactory $collectionFactory)
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
