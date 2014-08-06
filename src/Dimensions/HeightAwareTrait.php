<?php
namespace tomkyle\Atomic\Dimensions;

trait HeightAwareTrait
{

    protected $trait_height;

    public function setHeight($height)
    {
        $this->trait_height = $height;
        return $this;
    }

    public function getHeight()
    {
        return $this->trait_height;
    }

}
