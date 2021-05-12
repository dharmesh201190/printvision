<?php
namespace Biztech\MultipleDesignAreas\Controller\Adminhtml\Productdesigner\setDesignArea;

/**
 * Interceptor class for @see \Biztech\MultipleDesignAreas\Controller\Adminhtml\Productdesigner\setDesignArea
 */
class Interceptor extends \Biztech\MultipleDesignAreas\Controller\Adminhtml\Productdesigner\setDesignArea implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\LayoutInterface $layoutInterface, \Biztech\Productdesigner\Model\SelectionareaFactory $selectionAreaFactory, \Biztech\Productdesigner\Model\Mysql4\Selectionarea\CollectionFactory $selectionAreaCollection)
    {
        $this->___init();
        parent::__construct($context, $layoutInterface, $selectionAreaFactory, $selectionAreaCollection);
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
