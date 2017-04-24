<?php

// abstract Candy class

abstract class Candy {
  public $color;

  public function setCandyColor($value) {
    $this->color = $this->colors[$value];
  }
}

class Skittle extends Candy{}
class MandM extends Candy{}
class ReesesPiece extends Candy{}

// declare the bowl class
class candyBowl {
  private $bowl;

  //valid colors are red, orange, yellow, and green
  public $colors = array("Red","Orange","Yelow","Green");

  public function fillCandyBowl() {
    $candyBowl = array();

    //add 100 candy pieces to the bowl
    for ($i = 1; $i < 100; $i++) {
      $candyValue = rand(0,2);
      $colorValue = rand(0,3);

      //add a skittle
      if ($value == 0) {
        $skittle = new Skittle;
        $skittle.setCandyColor
        if ($value == 0)
          $skittle->color = $this->colors[$value];
        if ($value == 1)
          $skittle->color = $this->colors[$value];
        if ($value == 2)
          $skittle->color = $this->colors[$value];
        if ($value == 3)
          $skittle->color = $this->colors[$value];

        $candyBowl[] = $skittle;
      }

      //or add an m&m
      if ($value == 1) {
        $mandm = new mandm();
        $value = rand(0,3);
        if ($value == 0)
          $mandm->color = $this->colors[$value];
        if ($value == 1)
          $mandm->color = $this->colors[$value];
        if ($value == 2)
          $mandm->color = $this->colors[$value];
        if ($value == 3)
          $mandm->color = $this->colors[$value];

        $candyBowl[] = $mandm;
      }
    }

    $this->bowl = $candyBowl;
  }

  public function printBowl() {
    for ($i = 0; $i < sizeof($this->bowl); $i++) {
      if (get_class($this->bowl[$i]) == 'skittle') {
        echo $this->bowl[$i]->color . " skittle\n";
      } else {
        echo $this->bowl[$i]->color . " m&m\n";
      }
    }
  }

  //sort first by candy type, then by color (alphabetically)
  public function sortBowl() {
    $sortedBowl = array();
    $skittles = array();
    $mandms = array();

    for ($i = 0; $i < sizeof($this->bowl); $i++) {
      if (get_class($this->bowl[$i]) == 'skittle')
        $skittles[] = $this->bowl[$i];
      else
        $mandms[] = $this->bowl[$i];
    }

    asort($skittles);
    asort($mandms);

    $sortedBowl += $mandms;
    $sortedBowl += $skittles;
  }

}

?>
