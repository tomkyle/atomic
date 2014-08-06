<?php
namespace tomkyle\Atomic\Slugs;

use \tomkyle\Atomic\Slugs\SlugInterface;
use \tomkyle\Atomic\Slugs\SlugAbstract;

class Slug extends SlugAbstract
implements SlugInterface
{

/**
 * @param  string $slug
 * @uses   getValue()
 */
	public function __construct( $slug )
	{
		$this->setValue( $slug );
	}

	public function __toString() {
		return $this->value ?: '';
	}


}
