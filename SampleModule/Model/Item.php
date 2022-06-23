<?php

namespace Mastering\SampleModule\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Mastering\SampleModule\Api\Data\ItemInterface;

/**
 * Class File
 * @package Thecoachsmb\Mymodule\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Item extends AbstractModel implements ItemInterface, IdentityInterface
{

    const CACHE_TAG = 'mastering_samplemodule_view';
    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Mastering\SampleModule\Model\ResourceModel\Item::class);
    }


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRRIPTION);
    }


    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRRIPTION, $description);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }
}
