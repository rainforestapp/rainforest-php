<?php

namespace Rainforest;

class FakeApiMethod
{
    public $params;
    public $headers;

    public function __construct( $headers, $params ) {
      $this->headers = $headers;
      $this->params = $params;
    }

    public function execute() {
      return "execute_results";
    }
}

class ApiClientTest extends \PHPUnit_Framework_TestCase
{

    public function testExecute()
    {
      //Setup
      $clientArray = [
        "Accept" => "application/json",
        "Authorization" => "Fake Auth"
      ];

      $methodArray = [
        "Test" => "abc"
      ];

      $mergedArray = [
        "Accept" => "application/json",
        "Authorization" => "Fake Auth",
        "Test" => "abc"
      ];

      // Test Headers
      $client = new ApiClient($clientArray, []);
      $apiMethod = new FakeApiMethod($methodArray, []);
      $client->execute($apiMethod);
      $this->assertTrue(Utils::arraysAreSimilar($mergedArray, $apiMethod->headers));

      // Test Params & Result
      $client = new ApiClient([], $clientArray);
      $apiMethod = new FakeApiMethod([], $methodArray);
      $result = $client->execute($apiMethod);
      $this->assertTrue(Utils::arraysAreSimilar($mergedArray, $apiMethod->params));
      $this->assertSame("execute_results", $result);
    }

}
