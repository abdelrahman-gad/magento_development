<?php
namespace Mastering\SampleModule\Controller\Adminhtml\Index;


class Index extends \Magento\Backend\App\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{

		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
        die('backend construct');
		return $this->_pageFactory->create();
	}
}
