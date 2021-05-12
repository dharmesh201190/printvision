<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Masking\Gallery\Upload;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Masking\Gallery\Upload
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Masking\Gallery\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\File\UploaderFactory $fileUploaderFactory, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\Filesystem $filesystem, \Biztech\Productdesigner\Model\Mysql4\Masking\CollectionFactory $maskingCollection, \Biztech\Productdesigner\Model\MaskingFactory $maskingFactory, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($context, $fileUploaderFactory, $resultRawFactory, $filesystem, $maskingCollection, $maskingFactory, $storeManager);
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
