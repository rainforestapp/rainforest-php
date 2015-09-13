<?php

namespace Rainforest;

class ParamsBuilderTest extends \PHPUnit_Framework_TestCase
{

      public $params;
      public $toMerge;
      public $builtParams;

      public function __construct() {
        // Setup
        $this->params = [
          "dog" => "dog-value",
          "string" => "str-value"
        ];

        $this->toMerge = [
          "cat" => "cat-value",
          "string" => "str-override"
        ];


        $this->builtParams = ParamsBuilder::merge($this->params, $this->toMerge);
      }

      public function testShouldMergeAllValues() {
        $this->assertSame($this->params["dog"], $this->builtParams["dog"]);
        $this->assertSame($this->toMerge["string"], $this->builtParams["string"]);
        $this->assertSame($this->toMerge["cat"], $this->builtParams["cat"]);
      }

      public function testShouldPrioritizeValuesInToMerge() {
        $this->assertSame($this->toMerge["string"], $this->builtParams["string"]);
      }


}
