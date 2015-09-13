<?php

namespace Rainforest;

class User extends ApiResource {

  public $analytics_id;
  public $client_analytics_id;
  public $created_at;
  public $email;
  public $id;
  public $name;
  public $profiles;
  public $role;
  public $settings;
  public $state;

  public function refresh( $params=[], $headers=[] ) {
    return $this->client->users->retrieve( $this->id, $params, $headers );
  }

  public function resetPassword( $params=[], $headers=[] ) {
    return $this->client->users->resetPassword( $this->email, $params, $headers );
  }

  public static function all( $params=[], $headers=[] ) {
    return self::defaultClient()->users->all( $params, $headers );
  }

  public static function retrieve( $userId, $params=[], $headers=[] ) {
    return self::defaultClient()->users->retrieve( $userId, $params, $headers );
  }

  public static function update( $userId, $params=[], $headers=[] ) {
    return self::defaultClient()->users->update( $userId, $params, $headers );
  }

  public static function create( $params=[], $headers=[] ) {
    return self::defaultClient()->users->create( $params, $headers );
  }

  public function save( $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge($this->apiAttributes(), $params);
    $res = $this->client->users->update($this->id, $params, $headers);
    $this->refreshFrom($res->json, $res->apiMethod, $res->client);
  }

}
