<?php
namespace Lotus\Demo2\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFatory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        parent::__construct($context);
        $this->_pageFactory = $pageFactory;
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}