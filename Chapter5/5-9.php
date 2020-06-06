<?php
  function output() {
    echo "x      xの２乗\n";
    echo "-----------------\n";
    for ($i = 0; $i <= 1.000; $i += 0.001) {
      $pow = pow($i, 2);
      echo "{$i}       {$pow}\n";
    }
  }
  output();
?>