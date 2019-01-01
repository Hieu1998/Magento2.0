<?php
namespace Extension\Allocation\Model;

class Allocation extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Extension\Allocation\Model\ResourceModel\Allocation'); /*định nghĩa lớp ResourceModel liên kết*/
    }
}
