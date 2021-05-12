<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Masking\Createmaskingcategory;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Masking\Createmaskingcategory
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Masking\Createmaskingcategory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Biztech\Productdesigner\Model\MaskingcategoryFactory $maskingCategoryFactory)
    {
        $this->___init();
        parent::__construct($context, $maskingCategoryFactory);
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
