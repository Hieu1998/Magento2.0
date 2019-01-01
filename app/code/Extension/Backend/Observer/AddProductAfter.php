<?php
namespace Extension\Backend\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Message\ManagerInterface;

class AddProductAfter implements ObserverInterface{
    /**
     * @var \Extension\Backend\Model\BackenFactory
     */
    protected $_backendFactory;

    /**
     * @var \Magento\Customer\Model\Session
     */
    protected $session;
    public function __construct(
        \Extension\Backend\Model\BackendFactory $backendFactory,
        \Magento\Customer\Model\Session $session
    )
    {
        $this->_backendFactory = $backendFactory;
        $this->session = $session;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer){
        /**
         * $this->_eventManager->dispatch(
         *'checkout_cart_product_add_after',
         *['quote_item'=>$result,'product'=>$product]
         *);
         */
        $product = $observer->getData('product');
        //echo $product->getSku();
        /**
         * @var Magento\Quote\Model\Quote\Item $quoteItem
         */
        $quoteItem = $observer->getQuoteItem(); //$observer->getData('quote_item');
        $qty = $quoteItem->getQty();
        //lay Quota
        $backend = $this->_backendFactory->create();
        /**
         * get : Object A thuoc class Backend => Object A
         * create : Moi lan goi la tao ra 1 object rieng
         */
        $b2b_backend = $backend->getCollection();
        $b2b_backend->addFieldToFilter('email',$this->session->getCustomer()->getEmail());
        $b2b_backend->addFieldToFilter('sku',$product->getSku());
        $backend = $b2b_backend->getFirstItem();
        $quota = $backend->getQuantity();
        if($qty > $quota){
            throw new \Magento\Framework\Exception\LocalizedException(__('chi duoc mua %1 cai thoi',$quota));
        }else{
            echo "Mua thành công!";
        }
        //exit;
    }
}

