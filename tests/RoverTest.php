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
  public function testBackWardWhenFacingNorth(){
    $rover = new Rover(0, -1, "North");
    $this->assertEquals(
      array(
        0,
        -1,
        "North"
      ),
      $rover->getPositionAndOrientation()
    );
  }
  public function testBackWardWhenFacingSouth() {
    $rover = new Rover(0, 1, "South");
    $this->assertEquals(
      array(
        0,
        1,
        "South"
      ),
      $rover->getPositionAndOrientation()
    );
  }
  public function testBackWardWhenFacingEast() {
    $rover = new Rover (-1, 0, "East");
    $this->assertEquals(
      array(
        -1,
        0,
        "East"
      ),
      $rover->getPositionAndOrientation()
    );
  }
  public function testBackWardWhenFacingWest() {
    $rover = new  Rover (1, 0, "West");
    $this->assertEquals(
      array(
        1,
        0,
        "West"
      ),
      $rover->getPositionAndOrientation()
    );
  }
  public function testMoveToRightWhenFacingNorth() {
    $rover = new Rover (0, 0, "East");
    $this->assertEquals(
      array(
        0,
        0,
        "East"
      ),
      $rover-> getPositionAndOrientation()
    );
  }
  public function testMoveToRightWhenFacingEast() {
    $rover = new Rover (0, 0, "South");
    $this->assertEquals(
      array(
        0,
        0,
        "South"
      ),
      $rover->getPositionAndOrientation()
    );
  }
  public function testMoveToRightWhenFacingSouth() {
    $rover = new Rover (0, 0, "West");
    $this->assertEquals(
      array(
        0,
        0,
        "West"
      ),
      $rover->getPositionAndOrientation()
    );
  }
  public function testMoveToRightWhenFacingWest() {
    $rover = new Rover (0, 0, "North");
    $this->assertEquals(
      array(
        0,
        0,
        "North"
      ),
      $rover->getPositionAndOrientation()
    );
  }
  public function testMoveToLeftWhenFacingNorth() {
    $rover = new Rover (0, 0, "West");
    $this->assertEquals(
      array(
        0,
        0,
        "West"
      ),
      $rover->getPositionAndOrientation()
    );
  }
  public function MoveToLefttWhenFacingEast() {
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
  }
