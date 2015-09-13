<?php

namespace Rainforest;

class Site extends ApiResource {

  public $created_at;
  public $default;
  public $id;
  public $name;

  public function delete( $params=[], $headers=[] ) {
    return $this->client->sites->delete( $this->id, $params, $headers );
  }

  public static function all( $params=[], $headers=[] ) {
    return self::defaultClient()->sites->all( $params, $headers );
  }

  public static function update( $siteId, $params=[], $headers=[] ) {
    return self::defaultClient()->sites->update( $siteId, $params, $headers );
  }

  public static function create( $params=[], $headers=[] ) {
    return self::defaultClient()->sites->create( $params, $headers );
  }

  public function save( $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge($this->apiAttributes(), $params);
    $res = $this->client->sites->update($this->id, $params, $headers);
    $this->refreshFrom($res->json, $res->apiMethod, $res->client);
  }

}
