<?php
namespace Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\deleteDesignArea;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\deleteDesignArea
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Adminhtml\Productdesigner\deleteDesignArea implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Biztech\Productdesigner\Model\SelectionareaFactory $selectionAreaFactory)
    {
        $this->___init();
        parent::__construct($context, $selectionAreaFactory);
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
