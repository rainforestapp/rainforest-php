<?php

namespace Rainforest;

class FakeClass
{
    public $abc = "abc-value";

    public function __contruct() {
      $this->abc = "abc-value";
    }
}

class PathBuilderTest extends \PHPUnit_Framework_TestCase
{

      public $params;
      public $object;

      public function __construct() {
        // Setup
        $this->params = [
          "dog" => "dog-value"
        ];

        $this->object = new FakeClass();
      }



      public function testShouldUseInstanceMethods() {
        $path = "/a/:abc/123";
        $expected = "/a/abc-value/123";

        $actual = PathBuilder::build($path, $this->object, null);

        $this->assertSame($expected, $actual);
      }

      public function testShouldUseParamValues() {
        $path = "/a/:dog/123";
        $expected = "/a/dog-value/123";

        $actual = PathBuilder::build($path, null, $this->params);
        $this->assertSame($expected, $actual);
      }

      public function testShouldUseBothMethodsAndParam() {
        $path = "/a/:dog/:abc/123";
        $expected = "/a/dog-value/abc-value/123";

        $actual = PathBuilder::build($path, $this->object, $this->params);
        $this->assertSame($expected, $actual);
      }
}
