phpunit-example
===============

A very basic example phpunit being used with symfony2.

This system is made of three componants (classes):

 - one for adding two number together (Test\TestBundle\Adders\Adder)
 - one for converting a number into words (Test\TestBundle\Converters\NumbersToWords)
 - a class that takes the other two classes as arguments (Test\TestBundle\Managers\DataManager)

Mocks are used for testing the third class.
