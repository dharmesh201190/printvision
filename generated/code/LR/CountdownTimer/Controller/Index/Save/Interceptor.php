<?php
namespace LR\CountdownTimer\Controller\Index\Save;

/**
 * Interceptor class for @see \LR\CountdownTimer\Controller\Index\Save
 */
class Interceptor extends \LR\CountdownTimer\Controller\Index\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \LR\CountdownTimer\Model\CountdownTimerFactory $countdowntimer, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Framework\Image\AdapterFactory $adapterFactory, \Magento\Framework\Filesystem $filesystem)
    {
        $this->___init();
        parent::__construct($context, $countdowntimer, $uploaderFactory, $adapterFactory, $filesystem);
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
