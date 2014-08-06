<?php
/**
 * @author  Carsten Witt <carstenwitt@germania-kg.de>
 */


/**
 * Namespacing
 */
namespace tomkyle\Atomic\Urls;


use \tomkyle\Exceptions\InvalidArgumentExceptions\StringExpected;


/**
 * @author  Carsten Witt <carstenwitt@germania-kg.de>
 */
trait HasUrlTrait
{


// =======   Implement Interface HasUrlInterface  =========================



    protected $url;


/**
 * @param  string $url
 * @return object
 *
 * @uses   StringExpected
 * @uses   $url
 */
    public function setUrl($url)
    {
        if (is_string($url)
        or  is_null($url)) {
            $this->url = $url;
            return $this;
        }
        throw new StringExpected($url);
    }



/**
 * @return string URL
 *
 * @uses   $url
 */
    public function getUrl()
    {
        return $this->url;
    }




}
