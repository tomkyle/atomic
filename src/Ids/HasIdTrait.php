<?php
/**
 * @author  Carsten Witt <carstenwitt@germania-kg.de>
 */


/**
 * Namespacing
 */
namespace tomkyle\Atomic\Ids;

use \tomkyle\Atomic\Ids\HasIdInterface;

use \tomkyle\Exceptions\InvalidArgumentExceptions\IntegerExpected;
use \tomkyle\Exceptions\RuntimeExceptions\NoIdGiven;

/**
 * @author  Carsten Witt <carstenwitt@germania-kg.de>
 */
trait HasIdTrait
{


// =======   Implement Interface HasIdInterface  =========================


/**
 * @var int
 */
    protected $id;


/**
 * @param  int $id
 * @return object
 * @uses   $id;
 * @uses   \tomkyle\Atomic\Ids\HasIdInterface
 * @uses   \tomkyle\Atomic\Ids\HasIdInterface::getId()
 * @uses   \tomkyle\Exceptions\InvalidArgumentExceptions\IntegerExpected
 */
    public function setId($id)
    {
       // blacklist
        if (!(is_string($id) and filter_var($id, \FILTER_VALIDATE_INT) !== false)
        and !is_int($id)
        and !$id instanceOf HasIdInterface) {
            throw new IntegerExpected($id);
        }

        // generate integer ID
        if (is_string($id)) {
            $id = (int) trim($id);
        }
        elseif ($id instanceOf HasIdInterface) {
            $id = (int) $id->getId();
        }

        $this->id = $id;
        return $this;
    }




/**
 * Returns the ID.
 * If no ID is given (protected $id is not an integer),
 * a NoIdGiven exception will be thrown.
 *
 * @return int
 * @uses   $id
 * @uses   \tomkyle\Exceptions\RuntimeExceptions\NoIdGiven
 */
    public function getId( $force = false )
    {
        if (is_int($this->id) or $force) {
            return $this->id;
        }
        throw new NoIdGiven;
    }




}
