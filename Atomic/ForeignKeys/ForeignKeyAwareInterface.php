<?php
namespace tomkyle\Atomic\ForeignKeys;

use \tomkyle\Atomic\ForeignKeys\ForeignKeyInterface;

interface ForeignKeyAwareInterface {

    public function getForeignKey();

    public function setForeignKey( ForeignKeyInterface $foreign_key );
}
