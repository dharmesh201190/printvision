<?php
/**
 * @category   Biztech
 * @package    Biztech_Tooltip
 * @author     employee@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Biztech\Productdesigner\Ui\Component\Listing\Column;

class MainTabsColumn extends \Magento\Ui\Component\Listing\Columns\Column
{
    /**
     * constructor
     * 
     * @param \Magento\Framework\UrlInterface $urlBuilder
     * @param \Magento\Framework\View\Element\UiComponent\ContextInterface $context
     * @param \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory
     * @param array $components
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\UiComponent\ContextInterface $context,
        \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ){
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }


    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource) {

        if (isset($dataSource['data']['items'])) {
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $allMainTabs = $objectManager->create('Biztech\Productdesigner\Model\Adminhtml\Config\Source\Maintab')->toOptionArray();
            $keyValueArr = $this->setKeyValueArray($allMainTabs);
            foreach ($dataSource['data']['items'] as & $item) {
                if(array_key_exists($item['maintab'], $keyValueArr)){
                    $item['maintab'] = $keyValueArr[$item['maintab']];
                }
            }
        }

        return $dataSource;
    }


    public function setKeyValueArray($data){
        $tempArr = array();
        foreach ($data as $key => $value) {
            $tempArr[$value['value']] = $value['label'];
        }
        return $tempArr;
    }
}