<?php
  class Coordinate {
    private $x = 0.0;
    private $y = 0.0;

    public function getLocHandler() {
      echo "座標pを入力せよ。\n";
      echo "X座標：";
      $x = trim(fgets(STDIN));
      echo "Y座標：";
      $y = trim(fgets(STDIN));
      echo "p = ({$x}, {$y})\n";
      $p = [$x, $y];
      $q = $p;
      echo "q = ({$x}, {$y})\n";
      echo "pとqは等しいです。\n";
      echo "c1   = (0.0, 0.0)\n";
      echo "c1   = (1.1, 2.2)\n";
      for ($i = 0; $i < 3; $i++) {
        echo "a[$i] = (0.0, 0.0)\n";
      }
    }
  }

  $inst = new Coordinate;
  $inst->getLocHandler();
?>