<?php

namespace Rainforest;

class TestsEndpoint extends ApiEndpoint {

  public function build( $id ) {
    return new Test( ["id" => $id], null, $this->client );
  }

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/tests", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Test", $json, $method, $this->client );
  }

  public function retrieve( $testId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "test_id" => $testId,
    ], $params );
    $method = new ApiMethod( "get", "/tests/:test_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Test( $json, $method, $this->client );
  }

  public function delete( $testId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "test_id" => $testId,
    ], $params );
    $method = new ApiMethod( "delete", "/tests/:test_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return $json;
  }

  public function update( $testId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "test_id" => $testId,
    ], $params );
    $method = new ApiMethod( "put", "/tests/:test_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Test( $json, $method, $this->client );
  }

  public function create( $params=[], $headers=[] ) {
    $method = new ApiMethod( "post", "/tests", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Test( $json, $method, $this->client );
  }

  public function history( $testId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "test_id" => $testId,
    ], $params );
    $method = new ApiMethod( "get", "/tests/:test_id/history", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Run", $json, $method, $this->client );
  }

}
