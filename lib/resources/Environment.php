<?php

namespace Rainforest;

class Environment extends ApiResource {

  public $created_at;
  public $default;
  public $id;
  public $name;
  public $site_environments;
  public $webhook;
  public $webhook_enabled;

  public function refresh( $params=[], $headers=[] ) {
    return $this->client->environments->retrieve( $this->id, $params, $headers );
  }

  public function delete( $params=[], $headers=[] ) {
    return $this->client->environments->delete( $this->id, $params, $headers );
  }

  public function runs(  ) {
    return new EnvironmentRunsEndpoint( $this->client, $this );
  }

  public static function all( $params=[], $headers=[] ) {
    return self::defaultClient()->environments->all( $params, $headers );
  }

  public static function retrieve( $environmentId, $params=[], $headers=[] ) {
    return self::defaultClient()->environments->retrieve( $environmentId, $params, $headers );
  }

  public static function update( $environmentId, $params=[], $headers=[] ) {
    return self::defaultClient()->environments->update( $environmentId, $params, $headers );
  }

  public static function create( $params=[], $headers=[] ) {
    return self::defaultClient()->environments->create( $params, $headers );
  }

  public function save( $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge($this->apiAttributes(), $params);
    $res = $this->client->environments->update($this->id, $params, $headers);
    $this->refreshFrom($res->json, $res->apiMethod, $res->client);
  }

}
