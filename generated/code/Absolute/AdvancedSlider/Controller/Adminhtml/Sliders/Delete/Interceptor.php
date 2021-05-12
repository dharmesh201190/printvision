<?php
namespace Absolute\AdvancedSlider\Controller\Adminhtml\Sliders\Delete;

/**
 * Interceptor class for @see \Absolute\AdvancedSlider\Controller\Adminhtml\Sliders\Delete
 */
class Interceptor extends \Absolute\AdvancedSlider\Controller\Adminhtml\Sliders\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Absolute\AdvancedSlider\Model\SlidersRepository $slidersRepository)
    {
        $this->___init();
        parent::__construct($context, $slidersRepository);
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
