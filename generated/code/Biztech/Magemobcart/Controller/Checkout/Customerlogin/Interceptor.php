<?php
namespace Biztech\Magemobcart\Controller\Checkout\Customerlogin;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Checkout\Customerlogin
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Checkout\Customerlogin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Checkout\Model\Type\Onepage $onepageCheckout, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $onepageCheckout, $request, $jsonFactory);
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
