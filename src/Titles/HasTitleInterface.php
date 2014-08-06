<?php
namespace tomkyle\Atomic\Titles;

interface HasTitleInterface
{

/**
 * @param string $title
 */
    public function setTitle($title);

/**
 * @return string
 */
    public function getTitle();


}
