<?php

namespace Rainforest;

class RunsEndpoint extends ApiEndpoint {

  public function build( $id ) {
    return new Run( ["id" => $id], null, $this->client );
  }

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/runs", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Run", $json, $method, $this->client );
  }

  public function retrieve( $runId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "run_id" => $runId,
    ], $params );
    $method = new ApiMethod( "get", "/runs/:run_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Run( $json, $method, $this->client );
  }

  public function delete( $runId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "run_id" => $runId,
    ], $params );
    $method = new ApiMethod( "delete", "/runs/:run_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Run( $json, $method, $this->client );
  }

  public function abort( $runId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "run_id" => $runId,
    ], $params );
    $method = new ApiMethod( "delete", "/runs/:run_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Run( $json, $method, $this->client );
  }

  public function create( $params=[], $headers=[] ) {
    $method = new ApiMethod( "post", "/runs", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Run( $json, $method, $this->client );
  }

}
