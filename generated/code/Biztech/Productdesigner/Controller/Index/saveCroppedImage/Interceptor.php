<?php
namespace Biztech\Productdesigner\Controller\Index\saveCroppedImage;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Index\saveCroppedImage
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Index\saveCroppedImage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Framework\Filesystem $filesystem, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($context, $infoHelper, $filesystem, $storeManager);
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
