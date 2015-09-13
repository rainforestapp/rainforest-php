<?php

namespace Rainforest;

class EnvironmentsEndpoint extends ApiEndpoint {

  public function build( $id ) {
    return new Environment( ["id" => $id], null, $this->client );
  }

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/environments", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Environment", $json, $method, $this->client );
  }

  public function retrieve( $environmentId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "environment_id" => $environmentId,
    ], $params );
    $method = new ApiMethod( "get", "/environments/:environment_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Environment( $json, $method, $this->client );
  }

  public function delete( $environmentId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "environment_id" => $environmentId,
    ], $params );
    $method = new ApiMethod( "delete", "/environments/:environment_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return $json;
  }

  public function update( $environmentId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "environment_id" => $environmentId,
    ], $params );
    $method = new ApiMethod( "put", "/environments/:environment_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Environment( $json, $method, $this->client );
  }

  public function create( $params=[], $headers=[] ) {
    $method = new ApiMethod( "post", "/environments", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Environment( $json, $method, $this->client );
  }

}
