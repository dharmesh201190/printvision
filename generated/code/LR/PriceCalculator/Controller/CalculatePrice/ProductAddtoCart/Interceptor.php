<?php
namespace LR\PriceCalculator\Controller\CalculatePrice\ProductAddtoCart;

/**
 * Interceptor class for @see \LR\PriceCalculator\Controller\CalculatePrice\ProductAddtoCart
 */
class Interceptor extends \LR\PriceCalculator\Controller\CalculatePrice\ProductAddtoCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Checkout\Model\Cart $cart, \Magento\Catalog\Model\Product $product, \Magento\Framework\Serialize\SerializerInterface $serializer)
    {
        $this->___init();
        parent::__construct($context, $formKey, $cart, $product, $serializer);
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
