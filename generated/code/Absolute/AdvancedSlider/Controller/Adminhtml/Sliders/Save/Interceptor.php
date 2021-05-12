<?php
namespace Absolute\AdvancedSlider\Controller\Adminhtml\Sliders\Save;

/**
 * Interceptor class for @see \Absolute\AdvancedSlider\Controller\Adminhtml\Sliders\Save
 */
class Interceptor extends \Absolute\AdvancedSlider\Controller\Adminhtml\Sliders\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Absolute\AdvancedSlider\Model\SlidersRepository $slidersRepository, \Absolute\AdvancedSlider\Model\Sliders $sliders)
    {
        $this->___init();
        parent::__construct($context, $dataPersistor, $slidersRepository, $sliders);
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
