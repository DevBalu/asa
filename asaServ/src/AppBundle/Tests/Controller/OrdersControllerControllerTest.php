<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OrdersControllerControllerTest extends WebTestCase
{
    public function testOrders()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'newOrder');
    }

    public function testAllorders()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/allOrders');
    }

}
