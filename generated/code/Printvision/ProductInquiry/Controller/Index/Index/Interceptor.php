<?php
namespace Printvision\ProductInquiry\Controller\Index\Index;

/**
 * Interceptor class for @see \Printvision\ProductInquiry\Controller\Index\Index
 */
class Interceptor extends \Printvision\ProductInquiry\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Printvision\ProductInquiry\Model\ProductInquiryFactory $inquiryFactory, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Escaper $escaper, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation)
    {
        $this->___init();
        parent::__construct($context, $inquiryFactory, $transportBuilder, $scopeConfig, $storeManager, $messageManager, $escaper, $dataPersistor, $inlineTranslation);
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
