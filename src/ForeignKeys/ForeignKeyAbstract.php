<?php
namespace tomkyle\Atomic\ForeignKeys;

use \tomkyle\Atomic\ForeignKeys\ForeignKeyInterface;

abstract class ForeignKeyAbstract
implements ForeignKeyInterface {


    public $key;


/**
 * @return string
 * @uses   $key
 */
    public function __toString()
    {
        return '' . $this->key;
    }


/**
 * @return mixed
 * @uses   $key
 */
    public function getKey()
    {
        return $this->key;
    }


/**
 * @param  mixed $foreign_key
 * @return object Fluent Interface
 * @uses   $key
 */
    public function setKey( $foreign_key )
    {
        $this->key = $foreign_key;
        return $this;
    }

}
