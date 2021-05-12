<?php
namespace Biztech\Productdesigner\Controller\Index\upload;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Index\upload
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Index\upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Data $helper, \Magento\Framework\File\UploaderFactory $fileUploaderFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Customer\Model\Session $customerSession, \Biztech\Productdesigner\Model\Customerimages $customerImages)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $helper, $fileUploaderFactory, $filesystem, $customerSession, $customerImages);
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
