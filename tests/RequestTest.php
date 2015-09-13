<?php

namespace Rainforest;

class RequestTest extends \PHPUnit_Framework_TestCase
{

      public $params;
      public $url;

      public function __construct() {
        // Setup
        $this->params = [
          "a" => 1,
          "b" => [2, 3]
        ];

        $this->url = "test_url";
      }

      public function testShouldConvertParamsToAQueryString() {
        $expected = "a=1&0=2&1=3";
        $actual = Request::encodeForm($this->params);
        $this->assertSame($expected, $actual);
      }

}
