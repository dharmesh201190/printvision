<?php
namespace Magento\Reports\Model\ResourceModel\Product\Sold\Collection;

/**
 * Interceptor class for @see \Magento\Reports\Model\ResourceModel\Product\Sold\Collection
 */
class Interceptor extends \Magento\Reports\Model\ResourceModel\Product\Sold\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot $entitySnapshot, \Magento\Framework\DB\Helper $coreResourceHelper, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Sales\Model\Order\Config $orderConfig, \Magento\Sales\Model\ResourceModel\Report\OrderFactory $reportOrderFactory, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $entitySnapshot, $coreResourceHelper, $scopeConfig, $storeManager, $localeDate, $orderConfig, $reportOrderFactory, $connection, $resource);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItems');
        if (!$pluginInfo) {
            return parent::getItems();
        } else {
            return $this->___callPlugins('getItems', func_get_args(), $pluginInfo);
        }
    }
}
