<?php

namespace Test\TestBundle\Adders;

/**
 * Adder
 * Class for adding two integer values
 * 
 * @package Test\TestBundle\Adders
 * @author Paul Saunders
 */
class Adder
{
	/**
     * Given two integers return the sum of them
     *
     * @param integer $x First value
     * @param integer $y Second value
     *
     * @return integer
     */
    public function add($x, $y)
    {
        return $x + $y;
    }	
}
