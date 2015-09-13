<?php

namespace Rainforest;

class RunTestsEndpoint extends ApiEndpoint {

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/runs/:id/tests", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Test", $json, $method, $this->client );
  }

  public function retrieve( $testId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "test_id" => $testId,
    ], $params );
    $method = new ApiMethod( "get", "/runs/:id/tests/:test_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Test( $json, $method, $this->client );
  }

}
