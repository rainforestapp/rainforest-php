<?php

namespace Rainforest;

class DefaultClient extends ApiClient {

  public $clientStats;
  public $environments;
  public $generators;
  public $integrations;
  public $runs;
  public $schedules;
  public $siteEnvironments;
  public $sites;
  public $tests;
  public $users;

  public function __construct( $apiKey ) {

    if(isset($this)) {
      $this->build( $apiKey );
      return $this;
    } else {
      $ret = new static();
      $ret->build( $apiKey );
      return $ret;
    }

  }

  public function build( $apiKey ) {
      $headers = [
        "Accept" => "application/json",
        "Content-Type" => "application/json",
        "CLIENT_TOKEN" => $apiKey,
      ];
      $params = [
      ];

      $this->clientStats = new ClientStatsEndpoint( $this );
      $this->environments = new EnvironmentsEndpoint( $this );
      $this->generators = new GeneratorsEndpoint( $this );
      $this->integrations = new IntegrationsEndpoint( $this );
      $this->runs = new RunsEndpoint( $this );
      $this->schedules = new SchedulesEndpoint( $this );
      $this->siteEnvironments = new SiteEnvironmentsEndpoint( $this );
      $this->sites = new SitesEndpoint( $this );
      $this->tests = new TestsEndpoint( $this );
      $this->users = new UsersEndpoint( $this );

      parent::refreshFrom( $headers, $params );
      return $this;
  }

}
