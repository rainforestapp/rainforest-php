<?php

namespace Rainforest;

class Run extends ApiResource {

  public $browsers;
  public $created_at;
  public $current_progress;
  public $description;
  public $environment;
  public $filters;
  public $frontend_url;
  public $id;
  public $log_url;
  public $real_cost_to_run;
  public $result;
  public $sample_test_titles;
  public $state;
  public $state_details;
  public $stats;
  public $timestamps;
  public $total_failed_tests;
  public $total_no_result_tests;
  public $total_passed_tests;
  public $total_tests;

  public function refresh( $params=[], $headers=[] ) {
    return $this->client->runs->retrieve( $this->id, $params, $headers );
  }

  public function delete( $params=[], $headers=[] ) {
    return $this->client->runs->delete( $this->id, $params, $headers );
  }

  public function abort( $params=[], $headers=[] ) {
    return $this->client->runs->delete( $this->id, $params, $headers );
  }

  public function associatedTests(  ) {
    return new RunTestsEndpoint( $this->client, $this );
  }

  public static function all( $params=[], $headers=[] ) {
    return self::defaultClient()->runs->all( $params, $headers );
  }

  public static function retrieve( $runId, $params=[], $headers=[] ) {
    return self::defaultClient()->runs->retrieve( $runId, $params, $headers );
  }

  public static function create( $params=[], $headers=[] ) {
    return self::defaultClient()->runs->create( $params, $headers );
  }

}
