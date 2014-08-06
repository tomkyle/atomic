<?php
/**
 * @author  Carsten Witt <carstenwitt@germania-kg.de>
 */


/**
 * Namespacing
 */
namespace tomkyle\Atomic\Types;


use \tomkyle\Exceptions\InvalidArgumentExceptions\StringExpected;


/**
 * @author  Carsten Witt <carstenwitt@germania-kg.de>
 */
trait HasTypeTrait
{


// =======   Implement Interface HasTypeInterface  =========================



    protected $type;


/**
 * @param  string $type
 * @return object
 *
 * @uses   StringExpected
 * @uses   $type
 */
    public function setType($type)
    {
        if (is_string($type)
        or  is_null($type))
        {
            $this->type = $type;
            return $this;
        }
        throw new StringExpected($type);
    }



/**
 * @return string Type
 *
 * @uses   $type
 */
    public function getType()
    {
        return $this->type;
    }




}
