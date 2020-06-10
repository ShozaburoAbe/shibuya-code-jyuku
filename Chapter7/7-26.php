<?php

  function arrayInsOfN($x, $index, $prop) {
    array_splice($x, $index, 0, $prop);
    foreach($x as $key => $n) {
      echo "y[$key] = {$n}\n";
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
    echo "挿入するインデックス：";
    $index = trim(fgets(STDIN));
    echo "挿入する値：";
    $prop = trim(fgets(STDIN));
    arrayInsOfN($x, $index, $prop);
  }
  getInput();
?>