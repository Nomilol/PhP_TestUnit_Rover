<?php

class Rover {
  private $orientation = array("North", "East", "South", "West");
  private $x;
  private $y;

  public function __construct($x, $y, $orientation){
    $this->x = $x;
    $this->y = $y;
    $this->orientation = $orientation;
  }
  public function getPositionAndOrientation() {
    return array(
      $this->x,
      $this->y,
      $this->orientation
    );

  }
  public function StartPosition() {
    $this->$x = 0;
    $this->$y = 0;
    $this->$orientation = "North";
  }
  public function ForwardWhenFacingNorth() {
    $this->$x = 0;
    $this->$y = 1;
    $this->$orientation = "North";
  }
  public function ForwardWhenFacingSouth() {
    $this->$x = 0;
    $this->$y = -1;
    $this->$orientation = "South";
  }
  public function ForwardWhenFacingWest() {
    $this->$x = -1;
    $this->$y = 0;
    $this->$orientation = "West";
  }
  public function BackWardWhenFacingNorth() {
    $this->$x = -1;
    $this->$y = 0;
    $this->$orientation = "North";
  }
  public function BackWardWhenFacingSouth() {
    $this->$x = 0;
    $this->$y = 1;
    $this->$orientation = "South";
  }
  public function BackWardWhenFacingEast() {
    $this->$x = -1;
    $this->$y = 0;
    $this->$orientation = "East";
  }
  public function BackWardWhenFacingWest() {
    $this->$x = 1;
    $this->$y = 0;
    $this->$orientation = "West";
  }
  public function MoveToRightWhenFacingNorth() {
    if ($this->$orientation === "North") {
      return $this->$orientation = "East";
    }
  }
  public function MoveToRightWhenFacingEast() {
    if($this->$orientation === "East") {
      return $this->$orientation = "South";
    }
  }
  public function MoveToRightWhenFacingSouth() {
    if ($this->$orientation === "South") {
      return $this->$orientation = "West";
    }
  }
  public function MoveToRightWhenFacingWest() {
    if ($this->$orientation === "West") {
      return $this->$orientation = "North";
    }
  }
  public function MoveToLefttWhenFacingNorth() {
    if ($this->$orientation === "North" ) {
      return $this->$orientation = "West";
    }
  }
  public function MoveToLeftWhenFacingEast() {
    if ($this->$orientation === "East") {
      return $this->$orientation = "North";
    }
  }
}
