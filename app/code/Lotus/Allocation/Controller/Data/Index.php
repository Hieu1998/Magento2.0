<?php
namespace Lotus\Allocaion\Controller\Data;

class Allocation extends  \Magento\Framework\App\Action\Action {

    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    protected $_jsonFactory;
    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {

        $this->_jsonFactory = $jsonFactory;
        return parent::__construct($context);

    }

    public function execute(){

        $json = $this->_jsonFactory->create();
        $json->setData(
            [
                'test' => 'test'
            ]
        );
        return $json;
    }
}