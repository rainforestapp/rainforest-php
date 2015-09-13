<?php

namespace Rainforest;

class SiteEnvironment extends ApiResource {

  public $created_at;
  public $environment_id;
  public $id;
  public $site_id;
  public $url;

  public static function all( $params=[], $headers=[] ) {
    return self::defaultClient()->siteEnvironments->all( $params, $headers );
  }

  public static function update( $siteEnvironmentId, $params=[], $headers=[] ) {
    return self::defaultClient()->siteEnvironments->update( $siteEnvironmentId, $params, $headers );
  }

  public function save( $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge($this->apiAttributes(), $params);
    $res = $this->client->site_environments->update($this->id, $params, $headers);
    $this->refreshFrom($res->json, $res->apiMethod, $res->client);
  }

}
