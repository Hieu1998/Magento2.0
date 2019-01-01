<?php
namespace Lotus\Demo2\Block;

use Magento\Framework\View\Element\Template;

class Shoptiki extends \Magento\Framework\View\Element\Template
{
    protected $_productFactory;
    protected $_collectionFactory;
    
    public function __construct(
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Catalog\Model\ResourceModel\product\CollectionFactory $collectionFactory,
        Template\Context $context, array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_productFactory = $productFactory;
        $this->_collectionFactory = $collectionFactory;
    }

    public function getProductCollectionFactory()
    {
        $collectionProductFactorys = $this->_collectionFactory->create();
        $collectionProductFactorys->addAttributeToSelect('*');
        return $collectionProductFactorys;
    }

    public function getCatalogProductEntityText()
    {
        $productCollection = $this->_productFactory->create()->getCollection();
        $productCollection->addAttributeToFilter('is_featured',array('eq' => 0));
        $productCollection->addAttributeToSelect('*');
        return $productCollection;
    }
}