<?php
namespace Biztech\Magemobcart\Controller\Product\Addproductreview;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Product\Addproductreview
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Product\Addproductreview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Request\Http $request, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Review\Model\ReviewFactory $reviewFactory, \Magento\Review\Model\RatingFactory $ratingFactory, \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $request, $storeManager, $cartHelper, $reviewFactory, $ratingFactory, $formKey);
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
