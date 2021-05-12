<?php
namespace Biztech\ObjectAlignmentPosition\Controller\Index\getConfiguration;

/**
 * Interceptor class for @see \Biztech\ObjectAlignmentPosition\Controller\Index\getConfiguration
 */
class Interceptor extends \Biztech\ObjectAlignmentPosition\Controller\Index\getConfiguration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Data $data, \Biztech\Productdesigner\Helper\Info $infoHelper)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $data, $infoHelper);
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
