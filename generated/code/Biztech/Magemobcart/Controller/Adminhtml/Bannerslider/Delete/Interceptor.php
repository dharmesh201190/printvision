<?php
namespace Biztech\Magemobcart\Controller\Adminhtml\Bannerslider\Delete;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Adminhtml\Bannerslider\Delete
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Adminhtml\Bannerslider\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Biztech\Magemobcart\Model\Bannerslider $bannersliderModel)
    {
        $this->___init();
        parent::__construct($context, $bannersliderModel);
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
