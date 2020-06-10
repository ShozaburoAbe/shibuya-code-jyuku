<?php

  function arrayRmvOfN($x, $indexStrt, $length) {
    array_splice($x, $indexStrt, $length);
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
    echo "削除する開始のインデックス：";
    $indexStrt = trim(fgets(STDIN));
    echo "削除する要素の個数：";
    $length = trim(fgets(STDIN));
    arrayRmvOfN($x, $indexStrt, $length);
  }
  getInput();
?>