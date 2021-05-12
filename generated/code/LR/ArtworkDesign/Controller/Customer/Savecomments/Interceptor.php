<?php
namespace LR\ArtworkDesign\Controller\Customer\Savecomments;

/**
 * Interceptor class for @see \LR\ArtworkDesign\Controller\Customer\Savecomments
 */
class Interceptor extends \LR\ArtworkDesign\Controller\Customer\Savecomments implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \LR\ArtworkDesign\Model\ArtworkDesignFactory $artworkdesign, \LR\ArtworkDesign\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Escaper $escaper, \Magento\Framework\Serialize\SerializerInterface $serializer)
    {
        $this->___init();
        parent::__construct($context, $artworkdesign, $transportBuilder, $inlineTranslation, $scopeConfig, $storeManager, $escaper, $serializer);
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
