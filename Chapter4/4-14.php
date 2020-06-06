<?php
  function getSum() {
    echo "1からnまでの和を求めます。\n";
    echo "nの値：";
    $n = trim(fgets(STDIN));
    $sum;
    for ($i = 1; $i <= $n; $i++) {
      $sum += $i;
    }
    echo "1から{$n}までの和は{$sum}です。";
  }
  getSum();
?>