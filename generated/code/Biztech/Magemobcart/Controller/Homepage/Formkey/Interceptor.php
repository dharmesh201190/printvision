<?php
namespace Biztech\Magemobcart\Controller\Homepage\Formkey;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Homepage\Formkey
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Homepage\Formkey implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Biztech\Magemobcart\Helper\Data $cartHelper)
    {
        $this->___init();
        parent::__construct($context, $request, $jsonFactory, $cartHelper);
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
