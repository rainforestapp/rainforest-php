<?php

namespace Rainforest;

class SiteEnvironmentsEndpoint extends ApiEndpoint {

  public function build( $id ) {
    return new SiteEnvironment( ["id" => $id], null, $this->client );
  }

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/site_environments", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "SiteEnvironment", $json, $method, $this->client );
  }

  public function update( $siteEnvironmentId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "site_environment_id" => $siteEnvironmentId,
    ], $params );
    $method = new ApiMethod( "put", "/site_environments/:site_environment_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new SiteEnvironment( $json, $method, $this->client );
  }

}
