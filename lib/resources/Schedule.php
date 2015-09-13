<?php

namespace Rainforest;

class Schedule extends ApiResource {

  public $created_at;
  public $filters;
  public $id;
  public $repeat_rules;

  public function refresh( $params=[], $headers=[] ) {
    return $this->client->schedules->retrieve( $this->id, $params, $headers );
  }

  public function delete( $params=[], $headers=[] ) {
    return $this->client->schedules->delete( $this->id, $params, $headers );
  }

  public static function all( $params=[], $headers=[] ) {
    return self::defaultClient()->schedules->all( $params, $headers );
  }

  public static function retrieve( $scheduleId, $params=[], $headers=[] ) {
    return self::defaultClient()->schedules->retrieve( $scheduleId, $params, $headers );
  }

  public static function update( $scheduleId, $params=[], $headers=[] ) {
    return self::defaultClient()->schedules->update( $scheduleId, $params, $headers );
  }

  public static function create( $params=[], $headers=[] ) {
    return self::defaultClient()->schedules->create( $params, $headers );
  }

  public function save( $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge($this->apiAttributes(), $params);
    $res = $this->client->schedules->update($this->id, $params, $headers);
    $this->refreshFrom($res->json, $res->apiMethod, $res->client);
  }

}
