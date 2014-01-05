<?php

namespace Test\TestBundle\Managers;

use Test\TestBundle\Adders\Adder;
use Test\TestBundle\Converters\NumbersToWords;

/**
 * DataManager
 * 
 * @package Test\TestBundle\Managers
 * @author Paul Saunders
 */
class DataManager
{
    /**
     * Adder class
     *
     * @var Adder
     */
    protected $Adder;

    /**
     * The NumbersToWords class
     *
     * @var NumbersToWords
     */
    protected $NumbersToWords;

    /**
     * Class constructor
     *
     * @param Adder          $adder          Class for adding two numbers together
     * @param NumbersToWords $NumbersToWords Class for converting numbers to words
     *
     * @return void
     */
    public function __construct(Adder $adder,NumbersToWords $NumbersToWords)
    {
        $this->Adder = $adder;
        $this->NumbersToWords = $NumbersToWords;
    }

    /**
     * Get the sum of two numbers and return them as words
     *
     * @param integer $firstNumber First number
     * @param integer $secondNumber Second number
     *
     * @return string
     */
    public function addAndWordify($firstNumber, $secondNumber)
    {
        $sum = $this->Adder->add($firstNumber, $secondNumber);

        $return = $this->NumbersToWords->wordify($sum);
        
        return $return;
    }
}
