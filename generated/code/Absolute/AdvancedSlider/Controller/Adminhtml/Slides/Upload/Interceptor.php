<?php
namespace Absolute\AdvancedSlider\Controller\Adminhtml\Slides\Upload;

/**
 * Interceptor class for @see \Absolute\AdvancedSlider\Controller\Adminhtml\Slides\Upload
 */
class Interceptor extends \Absolute\AdvancedSlider\Controller\Adminhtml\Slides\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Absolute\AdvancedSlider\Model\ImageUploader $imageUploader)
    {
        $this->___init();
        parent::__construct($context, $imageUploader);
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
