<?php
namespace Biztech\Productdesigner\Controller\Cart\uploadCustomOptionFile;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Cart\uploadCustomOptionFile
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Cart\uploadCustomOptionFile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\File\UploaderFactory $fileUploaderFactory, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\Image\AdapterFactory $imageFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Data $helper, \Biztech\Productdesigner\Helper\Info $infoHelper)
    {
        $this->___init();
        parent::__construct($context, $fileUploaderFactory, $resultRawFactory, $imageFactory, $filesystem, $storeManager, $helper, $infoHelper);
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
