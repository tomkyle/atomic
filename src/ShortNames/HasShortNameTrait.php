<?php
namespace tomkyle\Atomic\ShortNames;

use \tomkyle\Exceptions\InvalidArgumentExceptions\StringExpected;

trait HasShortNameTrait
{

    public $short_name;

/**
 * @uses $short_name
 */
    public function setShortName($short_name)
    {
        if (is_string($short_name)
        or  is_null($short_name))
        {
            $this->short_name = $short_name;
            return $this;
        }
        throw new StringExpected($short_name);
    }


/**
 * @return string
 * @uses   $short_name
 */
    public function getShortName()
    {
        return $this->short_name;
    }


}
