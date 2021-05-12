<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Fonts\Index;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Fonts\Index
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Fonts\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Framework\Filesystem $filesystem, \Biztech\Productdesigner\Model\FontsFactory $fontsFactory, \Psr\Log\LoggerInterface $logger, \Magento\Backend\Model\Session $session)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $resultForwardFactory, $resultPageFactory, $uploaderFactory, $filesystem, $fontsFactory, $logger, $session);
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
