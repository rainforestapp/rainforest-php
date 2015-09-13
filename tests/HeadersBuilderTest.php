<?php

namespace Rainforest;

class HeadersBuilderTest extends \PHPUnit_Framework_TestCase
{

      public $headers;
      public $builtHeaders;

      public function __construct() {
        // Setup
        $this->headers = [
          "dog" => "dog-value"
        ];
        $this->builtHeaders = HeadersBuilder::build($this->headers);
      }

      public function testShouldSetTheUserAgent() {
        $this->assertNotEmpty($this->builtHeaders['user_agent']);
        $this->assertNotEmpty(strpos($this->builtHeaders['user_agent'], Rainforest::getApiVersion()));
        $this->assertNotEmpty(strpos($this->builtHeaders['user_agent'], Rainforest::VERSION));
      }

      public function testShouldSetAClientUserAgent() {
        $this->assertNotEmpty( ($this->builtHeaders['x_rainforest_client_user_agent'] || $this->builtHeaders['x_rainforest_client_raw_user_agent']) ) ;
      }

}
