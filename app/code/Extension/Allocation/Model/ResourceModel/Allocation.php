<?php
namespace Extension\Allocation\Model\ResourceModel;

class Allocation extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
    \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
    parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('user_quota', 'id'); /* tên bảng , Id của bảng*/
    }

}