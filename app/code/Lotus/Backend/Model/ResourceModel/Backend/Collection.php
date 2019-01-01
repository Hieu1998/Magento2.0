<?php
namespace Lotus\Backend\Model\ResourceModel\Backend;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    public function _construct(){
    $this->_init("Lotus\Backend\Model\Backend","Lotus\Backend\Model\ResourceModel\Backend");
        /* Lop Model + Lop Resource Model*/
    }
}