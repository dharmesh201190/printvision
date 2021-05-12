<?php
namespace Absolute\AdvancedSlider\Controller\Adminhtml\Slides\Index;

/**
 * Interceptor class for @see \Absolute\AdvancedSlider\Controller\Adminhtml\Slides\Index
 */
class Interceptor extends \Absolute\AdvancedSlider\Controller\Adminhtml\Slides\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $dataPersistor);
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
