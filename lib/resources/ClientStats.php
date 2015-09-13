<?php

namespace Rainforest;

class ClientStats extends ApiResource {

  public $has_runs;
  public $has_schedules;
  public $has_step_variables;
  public $has_steps;
  public $has_test_steps;
  public $has_tests;

  public function refresh( $params=[], $headers=[] ) {
    return $this->client->clientStats->retrieve( $params, $headers );
  }

  public static function retrieve( $params=[], $headers=[] ) {
    return self::defaultClient()->clientStats->retrieve( $params, $headers );
  }

}
