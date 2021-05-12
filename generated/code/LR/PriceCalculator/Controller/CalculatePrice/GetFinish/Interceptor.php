<?php
namespace LR\PriceCalculator\Controller\CalculatePrice\GetFinish;

/**
 * Interceptor class for @see \LR\PriceCalculator\Controller\CalculatePrice\GetFinish
 */
class Interceptor extends \LR\PriceCalculator\Controller\CalculatePrice\GetFinish implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonResultFactory, \LR\PriceCalculator\Model\PriceCalculatorFactory $pricecalculator)
    {
        $this->___init();
        parent::__construct($context, $jsonResultFactory, $pricecalculator);
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
