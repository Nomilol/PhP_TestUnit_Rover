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
        $rover->getPositionAndOrientation()
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
        $rover->getPositionAndOrientation()
      );
    }
    public function testForwardWhenFacingEast() {
      $rover = new Rover(1, 0, "East");
      $this->assertEquals(
        array(
          1,
          0,
          "East"
        ),
        $rover->getPositionAndOrientation()
      );
    }
    public function testForwardWhenFacingSouth() {
      $rover = new Rover(0, -1, "South");
      $this->assertEquals(
        array(
          0,
          -1,
          "South"
        ),
        $rover->getPositionAndOrientation()
      );
    }
  public function testForwardWhenFacingWest() {
    $rover = new Rover(-1, 0, "West");
    $this->assertEquals(
      array(
        -1,
        0,
        "West"
      ),
      $rover->getPositionAndOrientation()
    );
  }
  }
