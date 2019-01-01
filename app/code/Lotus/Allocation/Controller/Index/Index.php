<?php
namespace Lotus\Allocation\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $allocationFactory;

	protected $resultJsonFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
		\Lotus\Allocation\Model\AllocationFactory $allocationFactory //tự sinh ra khi tạo model
	)
	{
		parent::__construct($context);
		$this->resultJsonFactory = $resultJsonFactory;
		$this->allocationFactory = $allocationFactory;
	}

	public function execute()
	{
		//new object
		$result = $this->resultJsonFactory->create();
		//new object
		$allocation = $this->allocationFactory->create();
		// //load du lieu o id = 1
		// $allocation->load();
		// //in ket qua
		// return $result->setData($allocation->toArray());
		//Lay du lieu tu Collection
		// $allocations = $allocation->getCollection();
		// return $result->setData($allocations->load()->toArray());
		// $allocations->load();
	}
}