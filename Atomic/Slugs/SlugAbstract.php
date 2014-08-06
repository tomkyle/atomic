<?php
namespace tomkyle\Atomic\Slugs;

use \tomkyle\Atomic\Slugs\SlugInterface;

abstract class SlugAbstract
implements SlugInterface
{

	protected $value = '';

	public function setValue( $slug ) {
		$this->value = $slug;
		return $this;
	}

	public function getValue() {
		return $this->value;
	}



}
