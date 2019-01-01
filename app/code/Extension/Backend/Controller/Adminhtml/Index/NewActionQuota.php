<?php

namespace Extension\Backend\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class NewActionQuota extends \Magento\Backend\App\Action
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
