<?php
namespace LR\ArtworkDesign\Controller\Index\Save;

/**
 * Interceptor class for @see \LR\ArtworkDesign\Controller\Index\Save
 */
class Interceptor extends \LR\ArtworkDesign\Controller\Index\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \LR\ArtworkDesign\Model\ArtworkDesignFactory $artworkdesign, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Framework\Image\AdapterFactory $adapterFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($context, $artworkdesign, $uploaderFactory, $adapterFactory, $filesystem, $jsonResultFactory, $checkoutSession, $scopeConfig);
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
