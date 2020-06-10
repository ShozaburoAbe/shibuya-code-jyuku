<?php
  function sumOf() {
    echo "要素数；";
    $n = trim(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
      echo "x[$i]：";
      $num[$i] = trim(fgets(STDIN));
    }
    $sum = array_sum($num);
    echo "全要素の合計は{$sum}です。";
  }
  sumOf();
?>