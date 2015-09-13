<?php

namespace Rainforest;

class Test extends ApiResource {

  public $browsers;
  public $created_at;
  public $deletable;
  public $deleted;
  public $description;
  public $dry_run_url;
  public $editable;
  public $elements;
  public $has_been_dry_run;
  public $id;
  public $last_run;
  public $result;
  public $run_mode;
  public $site_id;
  public $start_uri;
  public $step_count;
  public $tags;
  public $test_id;
  public $title;

  public function refresh( $params=[], $headers=[] ) {
    return $this->client->tests->retrieve( $this->id, $params, $headers );
  }

  public function delete( $params=[], $headers=[] ) {
    return $this->client->tests->delete( $this->id, $params, $headers );
  }

  public function history( $params=[], $headers=[] ) {
    return $this->client->tests->history( $this->id, $params, $headers );
  }

  public static function all( $params=[], $headers=[] ) {
    return self::defaultClient()->tests->all( $params, $headers );
  }

  public static function retrieve( $testId, $params=[], $headers=[] ) {
    return self::defaultClient()->tests->retrieve( $testId, $params, $headers );
  }

  public static function update( $testId, $params=[], $headers=[] ) {
    return self::defaultClient()->tests->update( $testId, $params, $headers );
  }

  public static function create( $params=[], $headers=[] ) {
    return self::defaultClient()->tests->create( $params, $headers );
  }

  public function save( $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge($this->apiAttributes(), $params);
    $res = $this->client->tests->update($this->id, $params, $headers);
    $this->refreshFrom($res->json, $res->apiMethod, $res->client);
  }

}
