<?php
namespace Biztech\Watermark\Controller\Adminhtml\System\Config\Watermark;

/**
 * Interceptor class for @see \Biztech\Watermark\Controller\Adminhtml\System\Config\Watermark
 */
class Interceptor extends \Biztech\Watermark\Controller\Adminhtml\System\Config\Watermark implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Biztech\Productdesigner\Helper\Data $helper, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\Filesystem\DirectoryList $directoryList, \Magento\Framework\Filesystem $filesystem, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $helper, $assetRepo, $directoryList, $filesystem, $logger);
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
