<?php

namespace Rainforest;

class ApiMethodTest extends \PHPUnit_Framework_TestCase
{

    public function testShouldSetApiBase() {
      // Setup
      $method = "get";
      $path = "/testing";
      $params = [ "param_a" => "1" ];
      $headers = [ "header_a" => "a" ];
      $object = new \stdClass();
      $apiMethod = new ApiMethod($method, $path, $params, $headers, $object);

      // Assert Equals
      $this->assertSame(Rainforest::$apiBase, $apiMethod->apiBase);
    }


    public function testShouldUsePathBuilder() {
      // Setup
      $method = "get";
      $path = "/testing";
      $params = [ "param_a" => "1" ];
      $headers = [ "header_a" => "a" ];
      $object = new \stdClass();
      $apiMethod = new ApiMethod($method, $path, $params, $headers, $object);

      // Assert Equals
      $this->assertSame(PathBuilder::build($path, $object, $params), $apiMethod->path);
    }

    public function testShouldUseParamsBuilder() {
      // Setup
      $method = "get";
      $path = "/testing";
      $params = [ "param_a" => "1" ];
      $headers = [ "header_a" => "a" ];
      $object = new \stdClass();
      $apiMethod = new ApiMethod($method, $path, $params, $headers, $object);

      // Assert Equals
      $this->assertSame(ParamsBuilder::build($params), $apiMethod->params);
    }

    public function testShouldUseHeadersBuilder() {
      // Setup
      $method = "get";
      $path = "/testing";
      $params = [ "param_a" => "1" ];
      $headers = [ "header_a" => "a" ];
      $object = new \stdClass();
      $apiMethod = new ApiMethod($method, $path, $params, $headers, $object);

      // Assert Equals
      $this->assertSame(HeadersBuilder::build($headers), $apiMethod->headers);
    }

    // TODO: Test call Requester.request with the set attrs
    // TODO: Test create an ApiError if the request fails
    // TODO: Test return the response parsed as json
    // TODO: Test return an AuthenticationError if the status is 401
    // TODO: Test throw an error if the response_body isn't valid json




}

