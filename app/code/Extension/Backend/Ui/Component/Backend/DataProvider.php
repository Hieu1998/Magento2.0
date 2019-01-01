<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Extension\Backend\Ui\Component\Backend;

use Magento\Framework\Api\Filter;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\AuthorizationInterface;
use Magento\Framework\View\Element\UiComponent\DataProvider\Reporting;

class DataProvider extends \Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider
{
    //khu vuc cua products
    public function load($printQuery = false, $logQuery = false)
    {
        if (!$this->isLoaded()) {
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
