<?php

namespace Rainforest;

class Generator extends ApiResource {

  public $columns;
  public $created_at;
  public $data;
  public $description;
  public $generator_type;
  public $id;
  public $name;
  public $row_count;

  public function refresh( $params=[], $headers=[] ) {
    return $this->client->generators->retrieve( $this->id, $params, $headers );
  }

  public function delete( $params=[], $headers=[] ) {
    return $this->client->generators->delete( $this->id, $params, $headers );
  }

  public function rows(  ) {
    return new GeneratorRowsEndpoint( $this->client, $this );
  }

  public static function all( $params=[], $headers=[] ) {
    return self::defaultClient()->generators->all( $params, $headers );
  }

  public static function retrieve( $generatorId, $params=[], $headers=[] ) {
    return self::defaultClient()->generators->retrieve( $generatorId, $params, $headers );
  }

  public static function update( $generatorId, $params=[], $headers=[] ) {
    return self::defaultClient()->generators->update( $generatorId, $params, $headers );
  }

  public static function create( $params=[], $headers=[] ) {
    return self::defaultClient()->generators->create( $params, $headers );
  }

  public function save( $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge($this->apiAttributes(), $params);
    $res = $this->client->generators->update($this->id, $params, $headers);
    $this->refreshFrom($res->json, $res->apiMethod, $res->client);
  }

}
