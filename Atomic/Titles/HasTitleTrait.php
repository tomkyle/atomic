<?php
namespace tomkyle\Atomic\Titles;

use \tomkyle\Exceptions\InvalidArgumentExceptions\StringExpected;

trait HasTitleTrait
{


/**
 * @var string
 */
    protected $title;


/**
 * @param string $title
 * @uses  $title
 */

    public function setTitle($title)
    {
        if (is_string($title)
        or  is_null($title))
        {
            $this->title = $title;
            return $this;
        }
        throw new StringExpected($title);
    }


/**
 * @return string
 * @uses   $title
 */
    public function getTitle()
    {
        return $this->title;
    }


}
