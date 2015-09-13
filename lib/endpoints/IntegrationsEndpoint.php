<?php

namespace Rainforest;

class IntegrationsEndpoint extends ApiEndpoint {

  public function build( $id ) {
    return new Integration( ["id" => $id], null, $this->client );
  }

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/integrations", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Integration", $json, $method, $this->client );
  }

  public function retrieve( $integrationId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "integration_id" => $integrationId,
    ], $params );
    $method = new ApiMethod( "get", "/integrations/:integration_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Integration( $json, $method, $this->client );
  }

  public function update( $integrationId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "integration_id" => $integrationId,
    ], $params );
    $method = new ApiMethod( "put", "/integrations/:integration_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Integration( $json, $method, $this->client );
  }

}
