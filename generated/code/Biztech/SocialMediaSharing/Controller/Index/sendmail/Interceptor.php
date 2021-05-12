<?php
namespace Biztech\SocialMediaSharing\Controller\Index\sendmail;

/**
 * Interceptor class for @see \Biztech\SocialMediaSharing\Controller\Index\sendmail
 */
class Interceptor extends \Biztech\SocialMediaSharing\Controller\Index\sendmail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Theme\Block\Html\Header\Logo $logo, \Biztech\Productdesigner\Model\Mysql4\Designimages\Collection $designCollection, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\Translate\Inline\StateInterface $stateInterface)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $inlineTranslation, $transportBuilder, $logo, $designCollection, $config, $stateInterface);
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
