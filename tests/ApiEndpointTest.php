<?php

namespace Rainforest;

class ApiEndpointTest extends \PHPUnit_Framework_TestCase
{

    public function testInitialize()
    {
      // Test Should set the client and parent
      $ep = new ApiEndpoint("client", "parent");
      $this->assertSame("client", $ep->client);
      $this->assertSame("parent", $ep->parent);
    }
}
