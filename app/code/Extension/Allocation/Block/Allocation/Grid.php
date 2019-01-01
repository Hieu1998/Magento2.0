<?php
namespace Extension\Allocation\Block\Allocation;
class Grid extends \Magento\Framework\View\Element\Template
{
    public function getAllocations()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $allocation = $objectManager->create("Extension\Allocation\Model\Allocation");
        $allocations = $allocation->getCollection();
        return $allocations;
    }
}