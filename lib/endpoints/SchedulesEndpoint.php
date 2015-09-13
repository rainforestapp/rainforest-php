<?php

namespace Rainforest;

class SchedulesEndpoint extends ApiEndpoint {

  public function build( $id ) {
    return new Schedule( ["id" => $id], null, $this->client );
  }

  public function all( $params=[], $headers=[] ) {
    $method = new ApiMethod( "get", "/schedules", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new ApiList( "Schedule", $json, $method, $this->client );
  }

  public function retrieve( $scheduleId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "schedule_id" => $scheduleId,
    ], $params );
    $method = new ApiMethod( "get", "/schedules/:schedule_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Schedule( $json, $method, $this->client );
  }

  public function delete( $scheduleId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "schedule_id" => $scheduleId,
    ], $params );
    $method = new ApiMethod( "delete", "/schedules/:schedule_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Schedule( $json, $method, $this->client );
  }

  public function update( $scheduleId, $params=[], $headers=[] ) {
    $params = ParamsBuilder::merge( [
      "schedule_id" => $scheduleId,
    ], $params );
    $method = new ApiMethod( "put", "/schedules/:schedule_id", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Schedule( $json, $method, $this->client );
  }

  public function create( $params=[], $headers=[] ) {
    $method = new ApiMethod( "post", "/schedules", $params, $headers, $this->parent );
    $json = $this->client->execute( $method );
    return new Schedule( $json, $method, $this->client );
  }

}
