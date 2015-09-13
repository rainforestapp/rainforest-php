<?php

namespace Rainforest;

class ParamsBuilder {

    public static function clean( $params ) {
      if( $params == null ) {
        return array();
      }
      return $params;
    }

    public static function merge( $params, $toMerge ) {

      $params = self::clean($params);
      $toMerge = self::clean($toMerge);

      $params =  array_merge( $params, $toMerge );

      return $params;

    }

    public static function build( $params ) {
      return array_merge( self::default_params(), self::clean($params) );
    }

    public static function default_params() {
      $params = [
      ];
      return $params;
    }

}
