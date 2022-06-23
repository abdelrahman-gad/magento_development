<?php
namespace Mastering\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\VersionControl\AbstractDb;
 
class Item extends AbstractDb{
    protected function _construct()
    {
        $this->_init('mastering_sample_table', 'id');
    }
}
