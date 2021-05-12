<?php
namespace Biztech\Productdesigner\Controller\Customer\getCustomerImages;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Customer\getCustomerImages
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Customer\getCustomerImages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Customer\Model\Url $customerHelperData, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Customer\Helper\Address $addressHelper, \Magento\Framework\UrlFactory $urlFactory, \Magento\Customer\Model\Metadata\FormFactory $formFactory, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Magento\Customer\Api\Data\RegionInterfaceFactory $regionDataFactory, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressDataFactory, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory, \Magento\Customer\Model\Registration $registration, \Magento\Framework\Escaper $escaper, \Magento\Customer\Model\CustomerExtractor $customerExtractor, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Biztech\Productdesigner\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $formKeyValidator, $customerAccountManagement, $customerHelperData, $infoHelper, $addressHelper, $urlFactory, $formFactory, $subscriberFactory, $regionDataFactory, $addressDataFactory, $customerDataFactory, $registration, $escaper, $customerExtractor, $dataObjectHelper, $helper);
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
