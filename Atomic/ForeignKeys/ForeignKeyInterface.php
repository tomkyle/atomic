<?php
namespace tomkyle\Atomic\ForeignKeys;


interface ForeignKeyInterface {

    public function getKey();

    public function setKey( $foreig_key );

}
