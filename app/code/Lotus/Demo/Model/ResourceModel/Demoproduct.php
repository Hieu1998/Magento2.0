<?php
namespace Lotus\Demo\Model\ResourceModel;

class Demoproduct extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('l_demoproduct','id'); // ten bang, id cua bang
    }
}
