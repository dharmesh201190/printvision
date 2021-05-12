<?php
namespace LR\ArtworkDesign\Controller\Index\SaveCallmeback;

/**
 * Interceptor class for @see \LR\ArtworkDesign\Controller\Index\SaveCallmeback
 */
class Interceptor extends \LR\ArtworkDesign\Controller\Index\SaveCallmeback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \LR\ArtworkDesign\Model\ArtworkDesignFactory $artworkdesign, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Framework\Image\AdapterFactory $adapterFactory, \Magento\Framework\Filesystem $filesystem, \LR\ArtworkDesign\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Escaper $escaper, \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory)
    {
        $this->___init();
        parent::__construct($context, $artworkdesign, $uploaderFactory, $adapterFactory, $filesystem, $transportBuilder, $inlineTranslation, $scopeConfig, $storeManager, $escaper, $jsonResultFactory);
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
