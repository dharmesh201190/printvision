<?php
/**
 * Copyright © Biztech, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Biztech\Magemobcart\Block\Adminhtml\Notification;

use Magento\Backend\Block\Widget\Form\Container;

class Edit extends Container
{

    /**
     * Get edit form container header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        return __('Create Notification');
    }

    /**
     * @return Void
     */
    protected function _construct()
    {
        $this->_objectId = 'id';
        $this->_blockGroup = 'Biztech_Magemobcart';
        $this->_controller = 'adminhtml_notification';

        parent::_construct();

        $this->buttonList->update('save', 'label', __('Save & Send'));
        $this->buttonList->update('delete', 'label', __('Delete Notification'));

        $this->buttonList->add(
            'saveandcontinue',
            array(
            'label' => __('Save and Continue Edit'),
            'class' => 'save',
            'data_attribute' => array(
                'mage-init' => array('button' => array('event' => 'saveAndContinueEdit', 'target' => '#edit_form'))
            )
            ),
            -100
        );

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('block_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'hello_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'hello_content');
                }
            }
        ";
    }
}
