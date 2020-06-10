<?php
  function getInput() {
    echo "行列a\n";
    $a = [1, 2, 3, 4, 5, 6];
    foreach($a as $key => $n) {
      echo $n . "  ";
      if ($key == 2) echo "\n";
    }
    echo "\n行列b\n";
    $b = [6, 3, 4, 5, 1, 2];
    foreach($b as $key => $n) {
      echo $n . "  ";
      if ($key == 2) echo "\n";
    }
    for ($i = 0; $i < 6; $i++) {
      $c[$i] = $a[$i] + $b[$i];
    }
    echo "\n行列c\n";
    foreach($c as $key => $n) {
      echo $n . "  ";
      if ($key == 2) echo "\n";
    }
  }
  getInput();
?>