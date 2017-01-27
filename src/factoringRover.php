
<?php

class Rover {
  private $orientation = array("North", "East", "South", "West");
  private $x = [0, 1, 0, -1];
  private $y = [1, 0, -1, 0];

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
  public function Forward() {
    if($this->orientation === 'North'){
      return [
        $this->x = $x,
        $this->y = $y + 1
      ];
    }
    elseif ($this->orientation === 'East') {
      return [
        $this->x = $x +1,
        $this->y = $y
      ];
    }
    elseif ($this->orientation === 'South') {
      return [
        $this->x = $x,
        $this->y = $y -1
      ];
    }
    elseif ($this->orientation === 'West') {
      return [
        $this->x = $x -1,
        $this->y = $y
      ];
    }
  }

   public function Backward() {
     if ($this->orientation === "North") {
       return [
         $this->x = $x,
         $this->y = $y -1
       ];
     }
     elseif ($this->orientation ==="East") {
       return [
         $this->x = $x -1,
         $this->y = $y
       ];
     }
     elseif ($this->orientation === "South") {
       return [
         $this->x = $x,
         $this->y = $y +1
       ];
     }
     elseif ($this->orientation === "West") {
       return [
         $this->x = $x +1,
         $this->y = $y
       ];
     }
   }
  // public function Left() {
  //
  // }
  // public function Right() {
  //
  // }
}
