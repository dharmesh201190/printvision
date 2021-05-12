<?php
namespace Biztech\Productdesigner\Controller\Cliparts\getClipartImages;

/**
 * Interceptor class for @see \Biztech\Productdesigner\Controller\Cliparts\getClipartImages
 */
class Interceptor extends \Biztech\Productdesigner\Controller\Cliparts\getClipartImages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Biztech\Productdesigner\Helper\Info $infoHelper, \Magento\Catalog\Model\ProductFactory $_productLoader, \Biztech\Productdesigner\Model\Mysql4\Clipart\CollectionFactory $clipartFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Asset\Repository $assetRepo, \Biztech\Productdesigner\Helper\Data $dataHelper, \Biztech\Productdesigner\Model\Mysql4\Clipartmedia\CollectionFactory $ClipArtMedia, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Framework\App\Filesystem\DirectoryList $dir, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Magento\Framework\Event\Manager $manager, \Magento\Framework\DataObjectFactory $objectFactory)
    {
        $this->___init();
        parent::__construct($context, $infoHelper, $_productLoader, $clipartFactory, $storeManager, $assetRepo, $dataHelper, $ClipArtMedia, $localeFormat, $dir, $currencyFactory, $manager, $objectFactory);
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
