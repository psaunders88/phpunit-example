<?php

namespace Test\TestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * DefaultControllerTest
 * 
 * @package Test\TestBundle\Tests\Controller\DefaultControllerTest
 * @author Paul Saunders
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * Test the index action for default controller
     * 
     * @return void
     */
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/10/10');

        $this->assertTrue($crawler->filter('html:contains("Hello")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("twenty")')->count() > 0);
    }
}
