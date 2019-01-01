<?php
namespace Lotus\Demo\Block;

use Magento\Framework\View\Element\Template;

class Demoproduct extends \Magento\Framework\View\Element\Template
{
    protected $_productFactory;
    protected $_collectionFactory;

    public function __construct(
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory,
        Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->_productFactory = $productFactory;
        $this->_collectionFactory = $collectionFactory;
    }
    public function getCatalogProductEntity()
    {
        $collections = $this->_collectionFactory->create();
        $collections->addAttributeToSelect('*');
        return $collections;
    }
    public function getCatalogProductEntityText()
    {
        $productCollection = $this->_productFactory->create()->getCollection();
        // $productCollection->addAttributeToSelect("delivery_time","left");
        // $productCollection->addAttributeToSelect("is_featured","left");
        //show san pham noi bat
        //search bang is_featured de lay san pham noi bat
        $productCollection->addAttributeToFilter('is_featured', array('eq' => 0));
        //lay tat ca thong tin san pham noi bat
        $productCollection->addAttributeToSelect('*');
        // echo '<pre>';
        // echo $productCollection->getSelect();
        // print_r($productCollection->toArray());
        return $productCollection;
    }
}