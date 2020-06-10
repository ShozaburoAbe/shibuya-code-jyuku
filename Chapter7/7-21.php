<?php

  function aryExchange($a, $b) {
    echo "配列aとbの全要素を交換しました。\n";
    $c = $a;
    $a = $b;
    $b = $c;
    foreach($a as $key => $value) {
      echo "a[$key] = {$value}\n";
    }
    foreach($b as $key => $value) {
      echo "a[$key] = {$value}\n";
    }
  }

  function inputNums() {
    echo "配列aの要素数：";
    $stdinA = trim(fgets(STDIN));
    for ($i = 0; $i < $stdinA; $i++) {
      echo "a[$i]：";
      $propA = trim(fgets(STDIN));
      $a[$i] = $propA;
    }
    echo "配列bの要素数：";
    $stdinB = trim(fgets(STDIN));
    for ($i = 0; $i < $stdinB; $i++) {
      echo "b[$i]：";
      $propB = trim(fgets(STDIN));
      $b[$i] = $propB;
    }
    aryExchange($a, $b);
  }
  inputNums();
?>