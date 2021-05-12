<?php
namespace Temando\Shipping\Model\ResourceModel\Batch\OrderCollection;

/**
 * Interceptor class for @see \Temando\Shipping\Model\ResourceModel\Batch\OrderCollection
 */
class Interceptor extends \Temando\Shipping\Model\ResourceModel\Batch\OrderCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot $entitySnapshot, \Magento\Framework\DB\Helper $coreResourceHelper, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $entitySnapshot, $coreResourceHelper, $connection, $resource);
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
