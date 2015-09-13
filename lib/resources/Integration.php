<?php

namespace Rainforest;

class Integration extends ApiResource {

  public $created_at;
  public $id;
  public $recent_upstream_errors;
  public $settings;
  public $state;
  public $type;

  public function refresh( $params=[], $headers=[] ) {
    return $this->client->integrations->retrieve( $this->id, $params, $headers );
  }

  public static function all( $params=[], $headers=[] ) {
    return self::defaultClient()->integrations->all( $params, $headers );
  }

  public static function retrieve( $integrationId, $params=[], $headers=[] ) {
    return self::defaultClient()->integrations->retrieve( $integrationId, $params, $headers );
  }

  public static function update( $integrationId, $params=[], $headers=[] ) {
    return self::defaultClient()->integrations->update( $integrationId, $params, $headers );
  }

  public function save( $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge($this->apiAttributes(), $params);
    $res = $this->client->integrations->update($this->id, $params, $headers);
    $this->refreshFrom($res->json, $res->apiMethod, $res->client);
  }

}
