<?php
namespace Lotus\Demo\Model\ResourceModel\Demoproduct;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    public function _construct()
    {
        $this->_init('Lotus\Demo\Model\Demoproduct','Lotus\Demo\Model\ResourceModel\Demoproduct');
        /* Lop Model + Lop Resource Model*/
    }
}
