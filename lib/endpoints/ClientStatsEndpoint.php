<?php

namespace Rainforest;

class ClientStatsEndpoint extends ApiEndpoint {

  public function retrieve( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/clients/stats", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ClientStats( $json, $method, $this->client );
  }

}
