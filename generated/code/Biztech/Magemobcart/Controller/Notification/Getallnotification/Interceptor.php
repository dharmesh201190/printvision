<?php
namespace Biztech\Magemobcart\Controller\Notification\Getallnotification;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Notification\Getallnotification
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Notification\Getallnotification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Framework\App\Request\Http $request, \Biztech\Magemobcart\Model\Notificationhistory $notificationHistoryModel, \Biztech\Magemobcart\Model\Notification $notificationModel, \Biztech\Magemobcart\Model\Devicedata $deviceModel, \Magento\Catalog\Model\Category $categoryModel, \Magento\Sales\Model\Order $orderModel, \Magento\Catalog\Model\ProductFactory $productModel, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $cartHelper, $request, $notificationHistoryModel, $notificationModel, $deviceModel, $categoryModel, $orderModel, $productModel, $imageHelper, $date, $formKey);
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
