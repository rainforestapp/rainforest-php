<?php

namespace Rainforest;

class EnvironmentRunsEndpoint extends ApiEndpoint {

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/environments/:id/runs", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Run", $json, $method, $this->client );
  }

}
