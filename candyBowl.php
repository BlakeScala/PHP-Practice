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
      if ($candyValue == 0) {
        $skittle = new Skittle();
        $skittle->setCandyColor($colorValue);

        $candyBowl[] = $skittle;
      }

      //or add an m&m
      if ($candyValue == 1) {
        $mandm = new MandM();
        $mandm->setCandyColor($colorValue);

        $candyBowl[] = $mandm;
      }

      //or add a Reese's Piece
      if ($candyValue == 2) {
        $reesesPiece = new ReesesPiece();
        $reesesPiece->setCandyColor($colorValue);

        $candyBowl[] = $reesesPiece;
      }
    }

    $this->bowl = $candyBowl;
  }

  public function printBowl() {
    for ($i = 0; $i < sizeof($this->bowl); $i++) {\
      if (get_class($this->bowl[$i]) == 'skittle') {
        echo $this->bowl[$i]->color . " skittle\n";
      } else if (get_class($this->bowl[$i]) == 'm&m'){
        echo $this->bowl[$i]->color . " m&m\n";
      } else {
        echo $this->bowl[$i]->color . " reese's piece\n";
      }
    }
  }

  //sort first by candy type, then by color (alphabetically)
  public function sortBowl() {
    $sortedBowl = array();
    $skittles = array();
    $mandms = array();
    $reesesPieces = array();

    for ($i = 0; $i < sizeof($this->bowl); $i++) {
      if (get_class($this->bowl[$i]) == 'skittle')
        $skittles[] = $this->bowl[$i];
      else if (get_class($this->bowl[$i]) == 'm&m')
        $mandms[] = $this->bowl[$i];
      else
        $reesesPieces[] = $this->bowl[$i];
    }

    asort($skittles);
    asort($mandms);
    asort($reesesPieces);

    $sortedBowl += $mandms;
    $sortedBowl += $skittles;
    $sortedBowl += $reesesPieces;

    $this->bowl =$sortedBowl;
  }

}

?>
