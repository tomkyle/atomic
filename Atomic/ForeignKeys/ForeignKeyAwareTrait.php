<?php
namespace tomkyle\Atomic\ForeignKeys;

use \tomkyle\Atomic\ForeignKeys\ForeignKeyInterface;

trait ForeignKeyAwareTrait {


    public $foreign_key;

    public function getForeignKey()
    {
        return $this->foreign_key;
    }

    public function setForeignKey( ForeignKeyInterface $foreign_key )
    {
        $this->foreign_key = $foreign_key;
        return $this;
    }
}
