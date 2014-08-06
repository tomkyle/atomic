<?php
namespace tomkyle\Atomic\Descriptions;

use \tomkyle\Atomic\Descriptions\HasDescriptionInterface;

use \tomkyle\Exceptions\InvalidArgumentExceptions\StringExpected;

trait HasDescriptionTrait
{

    protected $description;

/**
 * @uses $description
 */
    public function setDescription($description)
    {
        if (is_string($description)
        or  is_null($description))
        {
            $this->description = $description;
            return $this;
        }
        throw new StringExpected($description);
    }


/**
 * @return string
 * @uses   $description
 */
    public function getDescription()
    {
        return $this->description;
    }


}
