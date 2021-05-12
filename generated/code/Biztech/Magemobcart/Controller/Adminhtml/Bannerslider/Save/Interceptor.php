<?php
namespace Biztech\Magemobcart\Controller\Adminhtml\Bannerslider\Save;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Adminhtml\Bannerslider\Save
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Adminhtml\Bannerslider\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\File\UploaderFactory $uploaderFactory, \Magento\Framework\Filesystem $fileSystem, \Biztech\Magemobcart\Model\Bannerslider $bannerSliderModel, \Magento\Store\Model\StoreManagerInterface $storeManagerInterface, \Magento\Backend\Model\Session $backendSession)
    {
        $this->___init();
        parent::__construct($context, $uploaderFactory, $fileSystem, $bannerSliderModel, $storeManagerInterface, $backendSession);
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
