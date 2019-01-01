<?php
namespace Extension\Backend\Model;

class Backend extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Extension\Backend\Model\ResourceModel\Backend'); /*định nghĩa lớp ResourceModel liên kết*/
    }
}
