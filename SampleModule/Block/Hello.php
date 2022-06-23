<?php

namespace Mastering\SampleModule\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory as ItemCollectionFactory;

class Hello extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_itemCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param ViewCollectionFactory $viewCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        ItemCollectionFactory $itemCollectionFactory,
        array $data = []
    ) {
        $this->_itemCollectionFactory  = $itemCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Post[]
     */
    public function getItems()
    {
        /** @var ViewCollection $viewCollection */
       return $this->_itemCollectionFactory->create()->getItems();

    }

    /**
     * For a given post, returns its url
     * @param Post $post
     * @return string
     */
    // public function getArticleUrl($viewId) {
    //      return $this->getUrl('blog/index/view/'.$view->getId(), ['_secure' => true]);
    // }

}
