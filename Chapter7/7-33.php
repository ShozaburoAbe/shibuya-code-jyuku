<?php
  class Dimension {

    public function singleDimension() {
      $a = [12, 536, -8, 7];
      echo "１次元配列の表示例\n";
      foreach ($a as $n) {
        echo $n . " ";
      }
      echo "\n\n";
    }
    public function doubleDimention() {
      echo "２次元配列の表示例\n";
      $a[0][0] = 32;
      $a[0][1] = -1;
      $a[0][2] = 32;
      $a[0][3] = 45;
      $a[0][4] = 67;
      $a[1][0] = 535;
      $a[1][1] = 99999;
      $a[1][2] = 2;
      $a[2][0] = 2;
      $a[2][1] = 5;
      $a[2][2] = -123;
      $a[2][3] = 9;
      for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < count($a[$i]); $j++) {
          echo $a[$i][$j]. "  ";
        }
        echo "\n";
      }
    }
  }
  $inst = new Dimension;
  $inst->singleDimension();
  $inst->doubleDimention();
?>