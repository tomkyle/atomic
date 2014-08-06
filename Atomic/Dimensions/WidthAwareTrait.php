<?php
namespace tomkyle\Atomic\Dimensions;

trait WidthAwareTrait
{

    protected $trait_width;

    public function setWidth($width)
    {
        $this->trait_width = $width;
        return $this;
    }
    public function getWidth()
    {
        return $this->trait_width;
    }

}
