<?php

  function arrayClone($x) {
    echo "配列xの複製yを作りました。\n";
    $y = $x;
    foreach($y as $key => $value) {
      echo "y[$key] = $value\n";
    }
  }

  function getInput() {
    echo "要素数：";
    $number = trim(fgets(STDIN));
    for ($i = 0; $i < $number; $i++) {
      echo "x[$i]：";
      $num = trim(fgets(STDIN));
      $x[$i] = $num;
    }
    arrayClone($x);
  }
  getInput();
?>