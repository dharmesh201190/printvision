<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Clipart\Delete;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Clipart\Delete
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Clipart\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\Image\AdapterFactory $imageFactory, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Biztech\Productdesigner\Helper\Data $helper, \Biztech\Productdesigner\Model\ClipartFactory $clipartFactory, \Biztech\Productdesigner\Model\ClipartmediaFactory $clipartMediaCollection, \Magento\Framework\Filesystem $filesystem, \Psr\Log\LoggerInterface $logger, \Biztech\Productdesigner\Model\Mysql4\Clipart\Collection $clipartCollection, \Biztech\Productdesigner\Model\ClipartmediaFactory $clipartMediaFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $imageFactory, $resultForwardFactory, $resultPageFactory, $uploaderFactory, $helper, $clipartFactory, $clipartMediaCollection, $filesystem, $logger, $clipartCollection, $clipartMediaFactory);
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
