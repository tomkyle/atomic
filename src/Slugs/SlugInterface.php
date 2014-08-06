<?php
namespace tomkyle\Atomic\Slugs;

interface SlugInterface
{

/**
 * @param  string $slug
 * @return object Fluent Interface
 */
	public function setValue( $slug );


/**
 * @return string
 */
	public function getValue();

}
