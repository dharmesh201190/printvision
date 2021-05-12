<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Masking\Deletemaskingcategory;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Masking\Deletemaskingcategory
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Masking\Deletemaskingcategory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Biztech\Productdesigner\Model\MaskingcategoryFactory $maskingCategoryFactory, \Magento\Framework\Filesystem $filesystem, \Biztech\Productdesigner\Model\Mysql4\Masking\CollectionFactory $maskingCollection, \Biztech\Productdesigner\Model\MaskingFactory $maskingFactory)
    {
        $this->___init();
        parent::__construct($context, $maskingCategoryFactory, $filesystem, $maskingCollection, $maskingFactory);
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
