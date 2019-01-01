<?php
namespace Lotus\Backend\Model;

class Backend extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Lotus\Backend\Model\ResourceModel\Backend'); /*định nghĩa lớp ResourceModel liên kết*/
    }
}
