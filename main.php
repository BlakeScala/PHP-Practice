<?php
  require_once('candyBowl.php');

  // Fill up a bowl with candy
  $bowl = new candyBowl();
  $bowl->fillCandyBowl();
  // Print out contents of bowl
  $bowl->printBowl();
  // Sort the candy
  $bowl->sortBowl();
  // Print again
  echo "\n\n";
  $bowl->printBowl();

?>
