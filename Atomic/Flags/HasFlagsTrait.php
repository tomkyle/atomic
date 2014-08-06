<?php
namespace tomkyle\Atomic\Flags;

trait HasFlagsTrait
{

/**
 * @var int
 */
    protected $flags = 0;


/**
 * @param int     $flag_const_value
 * @param bool    $bool_flag
 * @return object Fluent Interface
 * @uses   $flags
 */
    public function setFlag($flag_const_value, $bool_flag)
    {
        $bool_flag = (bool) $bool_flag;

        if ($bool_flag) {
            $this->flags |= $flag_const_value;
        }
        else {
            $this->flags &= ~$flag_const_value;
        }
        return $this;
    }



/**
 * Sets the flag storage to 0
 *
 * @return object Fluent Interface
 * @uses   $flags
 */
    public function resetFlags( ) {
        $this->flags = 0;
        return $this;
    }


/**
 * @param  int     $flag_const_value
 * @return object  Fluent Interface
 * @uses   $flags
 */
    public function addFlag( $flag_const_value ) {
        $this->flags = $this->flags | $flag_const_value;
        return $this;
    }


/**
 * @param  int     $flag_const_value
 * @return object  Fluent Interface
 * @uses   $flags
 */
    public function hasFlag( $flag_const_value ) {
        return (($this->flags & $flag_const_value) == $flag_const_value);
        return $this;
    }


/**
 * @param  int     $flag_const_value
 * @return object  Fluent Interface
 * @uses   $flags
 */
    public function removeFlag( $flag_const_value ) {
        $this->flags = $this->flags ^ $flag_const_value;
        return $this;
    }


}
