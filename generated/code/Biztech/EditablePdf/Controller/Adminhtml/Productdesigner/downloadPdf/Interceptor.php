<?php
namespace Biztech\EditablePdf\Controller\Adminhtml\Productdesigner\downloadPdf;

/**
 * Interceptor class for @see \Biztech\EditablePdf\Controller\Adminhtml\Productdesigner\downloadPdf
 */
class Interceptor extends \Biztech\EditablePdf\Controller\Adminhtml\Productdesigner\downloadPdf implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Filesystem $fileSystem)
    {
        $this->___init();
        parent::__construct($context, $fileSystem);
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
