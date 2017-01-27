<?php

use PHPUnit\Framework\TestCase;

/**
  *@covers Rover
  */

  class testRover extends TestCase {

    public function testStartPosition(){
      $rover = new Rover(0, 0, "North");
      $this->assertEquals(
        array(
           0,
           0,
           "North"
        ),
        $rover->getOrientation()
      );
    }

    public function testForwardWhenFacingNorth() {
      $rover = new Rover(0, 1, "North");
      $this->assertEquals(
        array(
          0,
          1,
          "North"
        ),
        $rover->getOrientation()
      );
    }
  }
