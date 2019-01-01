<?php
namespace   Lotus\Demo\Model;

class Demoproduct extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Lotus\Demo\Model\ResourceModel\Demoproduct'); // định nghĩa lớp ResourceModel liên kết
    }
}

