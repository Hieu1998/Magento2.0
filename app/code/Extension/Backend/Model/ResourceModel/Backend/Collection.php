<?php
namespace Extension\Backend\Model\ResourceModel\Backend;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    public function _construct(){
    $this->_init("Extension\Backend\Model\Backend","Extension\Backend\Model\ResourceModel\Backend");
        /* Lop Model + Lop Resource Model*/
    }
}