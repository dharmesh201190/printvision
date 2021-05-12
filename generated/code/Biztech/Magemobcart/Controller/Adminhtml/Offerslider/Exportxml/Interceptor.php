<?php
namespace Biztech\Magemobcart\Controller\Adminhtml\Offerslider\Exportxml;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Adminhtml\Offerslider\Exportxml
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Adminhtml\Offerslider\Exportxml implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Biztech\Magemobcart\Model\Offerslider $offersliderModel)
    {
        $this->___init();
        parent::__construct($context, $offersliderModel);
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
