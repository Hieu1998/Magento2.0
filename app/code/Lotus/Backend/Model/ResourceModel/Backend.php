<?php
namespace Lotus\Backend\Model\ResourceModel;

class Backend extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
    \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
    parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('l_demoproduct', 'id'); /* tên bảng , Id của bảng*/
    }

}