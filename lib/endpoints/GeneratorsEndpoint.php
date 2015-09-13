<?php

namespace Rainforest;

class GeneratorsEndpoint extends ApiEndpoint {

  public function build( $id ) {
    return new Generator( ["id" => $id], null, $this->client );
  }

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/generators", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Generator", $json, $method, $this->client );
  }

  public function retrieve( $generatorId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "generator_id" => $generatorId,
    ], $params );
    $method = new ApiMethod( "get", "/generators/:generator_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Generator( $json, $method, $this->client );
  }

  public function delete( $generatorId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "generator_id" => $generatorId,
    ], $params );
    $method = new ApiMethod( "delete", "/generators/:generator_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Generator( $json, $method, $this->client );
  }

  public function update( $generatorId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "generator_id" => $generatorId,
    ], $params );
    $method = new ApiMethod( "put", "/generators/:generator_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Generator( $json, $method, $this->client );
  }

  public function create( $params=[], $headers=[] ) {
    $method = new ApiMethod( "post", "/generators", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Generator( $json, $method, $this->client );
  }

}
