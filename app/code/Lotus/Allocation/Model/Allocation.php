<?php
namespace Lotus\Allocation\Model;

class Allocation extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Lotus\Allocation\Model\ResourceModel\Allocation'); /*định nghĩa lớp ResourceModel liên kết*/
    }
}
