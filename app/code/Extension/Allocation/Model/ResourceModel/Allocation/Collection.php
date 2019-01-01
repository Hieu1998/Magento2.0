<?php
namespace Extension\Allocation\Model\ResourceModel\Allocation;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    public function _construct(){
    $this->_init("Extension\Allocation\Model\Allocation","Extension\Allocation\Model\ResourceModel\Allocation");
        /* Lop Model + Lop Resource Model*/
    }
}