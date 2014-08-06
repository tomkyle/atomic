<?php
namespace tomkyle\Atomic\ForeignKeys;

use \tomkyle\Atomic\Ids\HasIdInterface;
use \tomkyle\Atomic\Ids\HasIdTrait;

use \tomkyle\Atomic\ForeignKeys\ForeignKeyAwareInterface;

class ForeignKeyFilterIterator extends \FilterIterator
implements HasIdInterface
{

    use HasIdTrait;


/**
 * @param \Iterator $iterator
 * @param string $search_id
 */
    public function __construct ( \Iterator $iterator, $search_id )
    {
        $this->setId( $search_id );
        parent::__construct( $iterator );
    }


/**
 * @return bool
 */
    public function accept()
    {
        $current = $this->current();
        return ($current instanceOf ForeignKeyAwareInterface
        and $current->getForeignKey()->getKey() == $this->getId());
    }
