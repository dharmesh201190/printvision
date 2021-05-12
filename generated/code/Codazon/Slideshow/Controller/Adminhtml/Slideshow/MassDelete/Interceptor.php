<?php
namespace Codazon\Slideshow\Controller\Adminhtml\Slideshow\MassDelete;

/**
 * Interceptor class for @see \Codazon\Slideshow\Controller\Adminhtml\Slideshow\MassDelete
 */
class Interceptor extends \Codazon\Slideshow\Controller\Adminhtml\Slideshow\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Codazon\Slideshow\Model\ResourceModel\Slideshow\CollectionFactory $collectionFactory)
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
