<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Imageeffects\Save;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Imageeffects\Save
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Imageeffects\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Biztech\Productdesigner\Model\ImageeffectsFactory $imageEffectsFactory, \Magento\Backend\Model\Session $session, \Magento\Framework\Filesystem $filesystem, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $resultForwardFactory, $resultPageFactory, $uploaderFactory, $imageEffectsFactory, $session, $filesystem, $logger);
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
