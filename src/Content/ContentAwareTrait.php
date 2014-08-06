<?php
namespace tomkyle\Atomic\Content;

use \tomkyle\Atomic\Content\ContentAwareInterface;


trait ContentAwareTrait
{

    protected $content;


/**
 * @uses $content
 */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;

    }


/**
 * @return string
 * @uses   $content
 */
    public function getContent()
    {
        return $this->content;
    }


}
