<?php

namespace Rainforest;

class SitesEndpoint extends ApiEndpoint {

  public function build( $id ) {
    return new Site( ["id" => $id], null, $this->client );
  }

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/sites", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Site", $json, $method, $this->client );
  }

  public function delete( $siteId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "site_id" => $siteId,
    ], $params );
    $method = new ApiMethod( "delete", "/sites/:site_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Site( $json, $method, $this->client );
  }

  public function update( $siteId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "site_id" => $siteId,
    ], $params );
    $method = new ApiMethod( "put", "/sites/:site_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Site( $json, $method, $this->client );
  }

  public function create( $params=[], $headers=[] ) {
    $method = new ApiMethod( "post", "/sites", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Site( $json, $method, $this->client );
  }

}
