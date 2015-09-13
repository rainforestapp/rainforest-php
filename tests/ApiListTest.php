<?php

namespace Rainforest;

class ApiListTest extends \PHPUnit_Framework_TestCase
{

    public function testInitialize()
    {
      // Setup
      $fakeResource = json_encode('{ :data => "fake-data" }');
      $list = new ApiList("ApiResource", $fakeResource);

      // Test Should Set The Klass
      $this->assertSame("ApiResource", $list->klass);

      // Test Should convert the data to klass intances
      $this->assertSame($fakeResource, $list->json);
    }

    public function testRefreshFrom()
    {
      // Setup
      $fakeResource = json_encode('{ :data => "fake-data" }');
      $fakeMethod = "fake-api-method";
      $fakeClient = "fake-client";
      $list = new ApiList("ApiResource", [], "invalid", "invalid");

      // Test Should update the apiMethod
      $list->refreshFrom("ApiResource", [$fakeResource], $fakeMethod);
      $this->assertSame($list->apiMethod, $fakeMethod);

      // Test Should update the client
      $list->refreshFrom("ApiResource", [$fakeResource], null, $fakeClient);
      $this->assertSame($list->client, $fakeClient);

      // Test Should clear existing data
      $list->refreshFrom("ApiResource", ["new-data"]);
      $this->assertNull($list->apiMethod);
      $this->assertNull($list->client);
    }
}
