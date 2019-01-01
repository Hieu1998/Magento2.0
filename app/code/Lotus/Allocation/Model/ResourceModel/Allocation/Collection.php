<?php
namespace Lotus\Allocation\Model\ResourceModel\Allocation;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    public function _construct(){
    $this->_init("Lotus\Allocation\Model\Allocation","Lotus\Allocation\Model\ResourceModel\Allocation");
        /* Lop Model + Lop Resource Model*/
    }
}