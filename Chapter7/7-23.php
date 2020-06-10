<?php
  function arraySrchIdx($x) {
    echo "探索する値：";
    $prop = trim(fgets(STDIN));
    echo "一致する要素のインデックス\n";
    foreach ($x as $key => $value) {
      if ($value == $prop) {
        echo $key . "\n";
      }
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
    arraySrchIdx($x);
  }
  getInput();
?>