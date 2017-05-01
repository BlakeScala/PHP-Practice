<?php

// abstract Candy class

abstract class Candy {
  public $color;
  public $colors = array("Red","Orange","Yellow","Green");

  function setCandyColor($value) {
    $this->color = $this->colors[$value];
  }
}

class Skittle extends Candy{}
class MandM extends Candy{}
class ReesesPiece extends Candy{}

// declare the bowl class
class CandyBowl {
  private $bowl;

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
    for ($i = 0; $i < sizeof($this->bowl); $i++) {
      if (get_class($this->bowl[$i]) == "Skittle") {
        echo $this->bowl[$i]->color . " Skittle\n";
      } else if (get_class($this->bowl[$i]) == 'MandM'){
        echo $this->bowl[$i]->color . " M&M\n";
      } else {
        echo $this->bowl[$i]->color . " Reese's Piece\n";
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
      if (get_class($this->bowl[$i]) == 'Skittle')
        $skittles[] = $this->bowl[$i];
      else if (get_class($this->bowl[$i]) == 'MandM')
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

    $this->bowl = $sortedBowl;
  }

}

?>
