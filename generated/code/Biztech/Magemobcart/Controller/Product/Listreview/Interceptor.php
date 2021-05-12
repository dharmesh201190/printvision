<?php
namespace Biztech\Magemobcart\Controller\Product\Listreview;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Product\Listreview
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Product\Listreview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\App\Request\Http $request, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Review\Model\ReviewFactory $reviewFactory, \Magento\Review\Model\RatingFactory $ratingFactory, \Magento\Review\Model\Rating\Option\Vote $ratingVote, \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $request, $cartHelper, $reviewFactory, $ratingFactory, $ratingVote, $formKey);
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
