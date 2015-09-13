<?php

namespace Rainforest;

class UsersEndpoint extends ApiEndpoint {

  public function build( $id ) {
    return new User( ["id" => $id], null, $this->client );
  }

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/users", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "User", $json, $method, $this->client );
  }

  public function retrieve( $userId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "user_id" => $userId,
    ], $params );
    $method = new ApiMethod( "get", "/users/:user_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new User( $json, $method, $this->client );
  }

  public function update( $userId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "user_id" => $userId,
    ], $params );
    $method = new ApiMethod( "put", "/users/:user_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new User( $json, $method, $this->client );
  }

  public function create( $params=[], $headers=[] ) {
    $method = new ApiMethod( "post", "/users", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new User( $json, $method, $this->client );
  }

  public function resetPassword( $email, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "email" => $email,
    ], $params );
    $method = new ApiMethod( "post", "/users/reset_password", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return $json;
  }

}
