<?php
namespace Printvision\ProductInquiry\Plugin\Pricing\Render\FinalPriceBoxPlugin;

/**
 * Interceptor class for @see \Printvision\ProductInquiry\Plugin\Pricing\Render\FinalPriceBoxPlugin
 */
class Interceptor extends \Printvision\ProductInquiry\Plugin\Pricing\Render\FinalPriceBoxPlugin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\SaleableInterface $saleableItem, \Magento\Framework\Pricing\Price\PriceInterface $price, \Magento\Framework\Pricing\Render\RendererPool $rendererPool, \Printvision\ProductInquiry\Helper\Data $helperData, \Magento\Catalog\Model\ProductFactory $productFactory, array $data = [], ?\Magento\Catalog\Model\Product\Pricing\Renderer\SalableResolverInterface $salableResolver = null, ?\Magento\Catalog\Pricing\Price\MinimalPriceCalculatorInterface $minimalPriceCalculator = null)
    {
        $this->___init();
        parent::__construct($context, $saleableItem, $price, $rendererPool, $helperData, $productFactory, $data, $salableResolver, $minimalPriceCalculator);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKey');
        if (!$pluginInfo) {
            return parent::getCacheKey();
        } else {
            return $this->___callPlugins('getCacheKey', func_get_args(), $pluginInfo);
        }
    }
}
