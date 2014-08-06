<?php
namespace tomkyle\Atomic\Names;

use \tomkyle\Exceptions\InvalidArgumentExceptions\StringExpected;

trait HasNameTrait
{

    public $name;

/**
 * @uses $name
 */
    public function setName($name)
    {
        if (is_string($name)
        or  is_null($name))
        {
            $this->name = $name;
            return $this;
        }
        throw new StringExpected($name);
    }


/**
 * @return string
 * @uses   $name
 */
    public function getName()
    {
        return $this->name;
    }


}
