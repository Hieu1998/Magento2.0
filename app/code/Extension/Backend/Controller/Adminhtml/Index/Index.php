<?php
namespace Extension\Backend\Controller\Adminhtml\Index;

class Index extends  \Magento\Backend\App\Action {

    protected function _isAllowed(){
        return true;
    }

    public function execute(){
        //echo $this->getRequest()->getFullActionName();exit;
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}

