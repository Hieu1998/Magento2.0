<?php
namespace Lotus\Allocation\Block;
class Allocation extends \Magento\Framework\View\Element\Template
{
    public function getAllocations()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $allocation = $objectManager->create("Lotus\Allocation\Model\Allocation");
        $allocations = $allocation->getCollection();
        return $allocations;
    }
}