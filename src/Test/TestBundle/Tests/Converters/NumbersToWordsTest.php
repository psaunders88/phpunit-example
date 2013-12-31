<?php

namespace Test\TestBundle\Tests\Converters;

use Test\TestBundle\Converters\NumbersToWords;

/**
 * NumbersToWordsTest
 * 
 * @package Test\TestBundle\Tests\Converters\NumbersToWordsTest
 * @author Paul Saunders
 */
class NumbersToWordsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test wordify for numbers with single, double and triple figures
     * 
     * @return void
     */
    public function testWordify()
    {
        $NumbersToWords = new NumbersToWords();

        // Single digit
        $given = 5;
        $expected = "five";
        $result = $NumbersToWords->wordify($given);
        $this->assertEquals($result, $expected);

        // Double digit
        $given = 21;
        $expected = "twenty-one";
        $result = $NumbersToWords->wordify($given);
        $this->assertEquals($result, $expected);

        // Triple digit
        $given = 100;
        $expected = "one hundred";
        $result = $NumbersToWords->wordify($given);
        $this->assertEquals($result, $expected);
    }
}
