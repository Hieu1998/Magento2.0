<?php

namespace Extension\Backend\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;

class Save extends \Magento\Backend\App\Action
{
    private $backendFactory;

    public function __construct(
        \Extension\Backend\Model\BackendFactory $backendFactory,
        Action\Context $context
    ) {
        $this->backendFactory = $backendFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $data = $this->getRequest()->getParam('general');
        //echo '<pre>'; print_r($data);exit; 
        //tao model
        $backend = $this->backendFactory->create();
        if(isset($data['id'])){
            $backend->load($data['id']);
        }
        $backend->addData($data)->save();
        $this->_redirect('*/*/index');
    }
}
