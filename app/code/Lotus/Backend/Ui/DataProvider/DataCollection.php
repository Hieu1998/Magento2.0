<?php
namespace Lotus\Backend\Ui\DataProvider;

class DataCollection extends \Magento\Framework\Data\Collection {

    public function load($printQuery = false, $logQuery = false)
    {
        if (!$this->isLoaded()) {
            /*
            $tasks = [
                [
                    'indexer_id' => "0",
                    'title' => "Hieu",

                ],
                [
                    'indexer_id' => "1",
                    'title' => "Ronaldo",
                ]
            ];
            */
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
            $products = $objectManager->create("\Magento\Catalog\Ui\DataProvider\Product\ProductCollection");
            $products->addAttributeToSelect("*");

            //get quantity
            $products->getSelect()->joinLeft(
                array('_inv' => $products->getResource()->getTable('cataloginventory_stock_item')),
                "_inv.product_id = e.entity_id",
                array('quantity' => 'qty')
            );

            //get name, price, sku, image
            foreach($products as $product){
                $this->addItem(($product));
            }

            $this->_setIsLoaded(true);
        }
        return $this;
    }
}