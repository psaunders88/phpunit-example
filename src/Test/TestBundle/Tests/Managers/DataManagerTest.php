<?php

namespace Test\TestBundle\Tests\Managers;

use Test\TestBundle\Managers\DataManager;

/**
 * DataManagerTest
 * 
 * @package Test\TestBundle\Tests\Managers\DataManagerTest
 * @author Paul Saunders
 */
class DataManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testAddAndWordify()
    {
        // Build mock Adder 
        $mockAdder = $this->getMockBuilder('Test\TestBundle\Adders\Adder')
            ->setConstructorArgs(array())
            ->getMock();

        // Set expected functions for adder
        $mockAdder->expects($this->once())
            ->method('add')
            ->will($this->returnValue(102)
        );

        // Build mock NumbersToWords
        $mockNumbersToWords = $this->getMockBuilder('Test\TestBundle\Converters\NumbersToWords')
            ->setConstructorArgs(array())
            ->getMock();

        // Set expected functions for NumbersToWords
        $mockNumbersToWords->expects($this->once())
            ->method('wordify')
            ->will($this->returnValue("one hundred and two")
        );

        $DataManager = new DataManager($mockAdder, $mockNumbersToWords);

        // These values are not that important because we've mocked the add function
        $firstNumber = 52;
        $secondNumber = 50;
        $expected = "one hundred and two";

        $result = $DataManager->addAndWordify($firstNumber, $secondNumber);

        $this->assertEquals($result, $expected);
    }
}
