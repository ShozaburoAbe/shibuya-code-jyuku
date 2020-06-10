<?php

  function arrayRmvOf($x, $index) {
    unset($x[$index]);
    sort($x);
    foreach($x as $key => $value) {
      echo "y[$key] = {$value}\n";
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
    echo "削除する要素のインデックス：";
    $index = trim(fgets(STDIN));
    arrayRmvOf($x, $index);
  }
  getInput();
?>