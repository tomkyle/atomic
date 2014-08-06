<?php
namespace tomkyle\Atomic\Ids;

use \tomkyle\Atomic\Ids\HasIdInterface;
use \tomkyle\Atomic\Ids\HasIdTrait;

class IdFilterIterator extends \FilterIterator
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
        return ($current instanceOf HasIdInterface
        and $current->getId() == $this->getId());
    }

//  ========  Additional API  ===================


/**
 * @return mixed
 */
    public static function filter( \ArrayObject $collection, $id_csv )
    {
        $collection_class = get_class($collection);
        $rueck = new $collection_class;

        if (!$id_csv) {
            return $rueck;
        }

        if (is_string($id_csv)) {
            if (!preg_match("/^[0-9,\s]*$/", $id_csv)) {
                throw new \InvalidArgumentException('Could not understand the IDs given: "' . $id_csv.'"');
            }
            $id_csv = explode(",", $id_csv);
        }

        foreach($id_csv as $id) {
            foreach(new static($collection->getIterator(), $id) as $accepted) {
                $rueck->offsetSet($accepted->getId(), $accepted);
            }
        }
        return $rueck;
    }


}
