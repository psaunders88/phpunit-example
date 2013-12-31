<?php

namespace Test\TestBundle\Tests\Adders;

use Test\TestBundle\Adders\Adder;

/**
 * AdderTest
 * 
 * @package Test\TestBundle\Tests\Adders\AdderTest
 * @author Paul Saunders
 */
class AdderTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Test that given two variables the add function returns the sum
	 *
	 * @return void
	 */
    public function testAdd()
    {
        $adder = new Adder();
        $firstValue = 10;
        $secondValue = 3;
        $expected = $firstValue+$secondValue;

        $result = $adder->add($firstValue, $secondValue);

        $this->assertEquals($result, $expected);
    }
}
