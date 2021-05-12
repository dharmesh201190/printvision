<?php
namespace LR\PriceCalculator\Controller\CalculatePrice\ShowDetails;

/**
 * Interceptor class for @see \LR\PriceCalculator\Controller\CalculatePrice\ShowDetails
 */
class Interceptor extends \LR\PriceCalculator\Controller\CalculatePrice\ShowDetails implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($context);
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
