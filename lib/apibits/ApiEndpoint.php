<?php

namespace Rainforest;

class ApiEndpoint {
  public $client;
  public $parent;

  public function __construct( $client, $parent=null ) {
    $this->client = $client;
    $this->parent = $parent;
  }
}
