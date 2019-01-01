<?php

namespace Lotus\Demo\Controller\Product;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
            $sku        = $post['sku'];
            $name       = $post['name'];
            $price      = $post['price'];
            $quantity   = $post['quantity'];

            // Doing-something with...
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();       
            $productSave = $objectManager->create('Lotus\Demo\Model\Demoproduct');
            $productSave->setSku($sku); 
            $productSave->setName($name); 
            $productSave->setPrice($price); 
            $productSave->setQuantity($quantity);
            $productSave->save();

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Insert Completed !');

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/demoproduct/product/index');  //trả về trang index
            return $resultRedirect;
        }
        // 2. GET request : Render the form page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}