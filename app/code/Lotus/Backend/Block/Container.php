<?php
namespace Lotus\Backend\Block;

class Container extends \Magento\Backend\Block\Widget\Grid\Container {

    protected function _construct()
    {
        $this->_controller = 'backend';
        $this->_blockGroup = 'Lotus_Backend';
        $this->_headerText = __('Backend Managment');
        parent::_construct();
        $this->buttonList->remove('add');
    }
}
