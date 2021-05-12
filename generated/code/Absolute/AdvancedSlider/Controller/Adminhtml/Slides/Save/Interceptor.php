<?php
namespace Absolute\AdvancedSlider\Controller\Adminhtml\Slides\Save;

/**
 * Interceptor class for @see \Absolute\AdvancedSlider\Controller\Adminhtml\Slides\Save
 */
class Interceptor extends \Absolute\AdvancedSlider\Controller\Adminhtml\Slides\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Absolute\AdvancedSlider\Model\SlidesRepository $slidesRepository, \Absolute\AdvancedSlider\Model\Slides $slides)
    {
        $this->___init();
        parent::__construct($context, $dataPersistor, $slidesRepository, $slides);
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
