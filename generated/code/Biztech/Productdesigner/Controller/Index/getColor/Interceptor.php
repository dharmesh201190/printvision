<?php
namespace Biztech\Productdesigner\Controller\Index\getColor;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Index\getColor
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Index\getColor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Biztech\Productdesigner\Helper\Data $helper, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\Filesystem\DirectoryList $dir, \Magento\Framework\App\Request\Http $request, \Psr\Log\LoggerInterface $logger, \Biztech\Productdesigner\Model\PrintablecolorFactory $printableColorFactory, \Biztech\Productdesigner\Model\Mysql4\Printablecolor\CollectionFactory $printableColorCollection)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $helper, $infoHelper, $assetRepo, $dir, $request, $logger, $printableColorFactory, $printableColorCollection);
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
