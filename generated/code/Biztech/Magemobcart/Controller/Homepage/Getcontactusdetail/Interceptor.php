<?php
namespace Biztech\Magemobcart\Controller\Homepage\Getcontactusdetail;

/**
 * Interceptor class for @see \Biztech\Magemobcart\Controller\Homepage\Getcontactusdetail
 */
class Interceptor extends \Biztech\Magemobcart\Controller\Homepage\Getcontactusdetail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Biztech\Magemobcart\Helper\Data $cartHelper, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation, \Magento\Contact\Model\MailInterface $mail, \Magento\Framework\Data\Form\FormKey $formKey)
    {
        $this->___init();
        parent::__construct($context, $request, $jsonFactory, $cartHelper, $inlineTranslation, $mail, $formKey);
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
