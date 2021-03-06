<?php
namespace Mastering\SampleModule\Model\ResourceModel\Item;
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{

    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(\Mastering\SampleModule\Model\Item::class, \Mastering\SampleModule\Model\ResourceModel\Item::class);
    }
}
