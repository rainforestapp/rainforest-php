<?php

namespace Rainforest;

class GeneratorRowsEndpoint extends ApiEndpoint {

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/generators/:id/rows", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return $json;
  }

  public function create( $params=[], $headers=[] ) {
    $method = new ApiMethod( "post", "/generators/:id/rows", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return $json;
  }

}
