<?php
namespace tomkyle\Atomic\Slugs;

use \tomkyle\Atomic\Slugs\Slug;
use \tomkyle\Atomic\Slugs\SlugInterface;
use \tomkyle\Atomic\Slugs\HasSlugInterface;
use \tomkyle\Exceptions\InvalidArgumentExceptions\StringExpected;

trait HasSlugTrait
{



// =======   Implement Interface HasSlug  =========================



    public $slug;


/**
 * @param  string $slug
 * @return Slug
 *
 * @uses   StringExpected
 * @uses   $slug
 */
    public function setSlug($slug)
    {
        if (is_string($slug))
        {
            $this->slug = new Slug( $slug );
            return $this;
        } elseif ($slug instanceOf HasSlugInterface) {
            $this->slug = $slug->getSlug();
            return $this;
        } elseif ($slug instanceOf Slug) {
            $this->slug = $slug;
            return $this;
        } elseif (is_null($slug)) {
            $this->slug = $slug;
            return $this;
        }
        throw new StringExpected($slug);
    }



/**
 * @return Slug
 * @uses   $slug
 */
    public function getSlug()
    {
        if ($this->slug instanceOf SlugInterface) {
            return $this->slug;
        }
        $this->slug = new Slug($this->slug);
        return $this->slug;
    }



}
