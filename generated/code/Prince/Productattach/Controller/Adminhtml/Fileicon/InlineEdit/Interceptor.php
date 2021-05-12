<?php
namespace Prince\Productattach\Controller\Adminhtml\Fileicon\InlineEdit;

/**
 * Interceptor class for @see \Prince\Productattach\Controller\Adminhtml\Fileicon\InlineEdit
 */
class Interceptor extends \Prince\Productattach\Controller\Adminhtml\Fileicon\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Prince\Productattach\Model\FileiconFactory $fileiconFactory)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $fileiconFactory);
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
