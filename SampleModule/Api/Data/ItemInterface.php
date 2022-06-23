<?php

namespace Mastering\SampleModule\Api\Data;

interface ItemInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID            = 'id';
    const NAME          = 'name';
    const DESCRRIPTION  = 'description';
   


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Get Created At
     *
     * @return string|null
     */

    public function getId();

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setName($name);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setDescription($description);


    public function setId($id);
}
