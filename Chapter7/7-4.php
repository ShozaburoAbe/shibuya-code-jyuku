<?php
  function getSum() {
    echo "1からxまでの和を求めます。\nxの値：";
    $stdin = trim(fgets(STDIN));
    for ($i = 1; $i <= $stdin; $i++) {
      $sum += $i;
    }
    echo "1から{$stdin}までの和は{$sum}です。";
  }
  getSum();
?>