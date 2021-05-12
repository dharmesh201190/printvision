<?php
namespace LR\CountdownTimer\Controller\Adminhtml\Delivery\Edit;

/**
 * Interceptor class for @see \LR\CountdownTimer\Controller\Adminhtml\Delivery\Edit
 */
class Interceptor extends \LR\CountdownTimer\Controller\Adminhtml\Delivery\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Framework\Image\AdapterFactory $adapterFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filesystem\Driver\File $file)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $resultForwardFactory, $resultPageFactory, $directoryList, $uploaderFactory, $adapterFactory, $filesystem, $file);
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
