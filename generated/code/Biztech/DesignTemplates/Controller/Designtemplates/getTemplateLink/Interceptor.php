<?php
namespace Biztech\DesignTemplates\Controller\Designtemplates\getTemplateLink;

/**
 * Interceptor class for @see \Biztech\DesignTemplates\Controller\Designtemplates\getTemplateLink
 */
class Interceptor extends \Biztech\DesignTemplates\Controller\Designtemplates\getTemplateLink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\ProductFactory $_productLoader, \Biztech\DesignTemplates\Helper\Template $templateHelper, \Biztech\DesignTemplates\Model\Mysql4\Designtemplatecategory\CollectionFactory $templateCategoryFactory, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Framework\DataObjectFactory $objectFactory)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $_productLoader, $templateHelper, $templateCategoryFactory, $infoHelper, $objectFactory);
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
