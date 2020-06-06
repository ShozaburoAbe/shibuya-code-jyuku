<?php
  function getSum() {
    echo "1からnまでの和を求めます。\n";
    echo "nの値：";
    $n = trim(fgets(STDIN));
    $sum;
    for ($i = 1; $i <= $n; $i++) {
      if ($i < $n) {
        echo $i . " + ";
      } elseif($i == $n) {
        echo $i;
      }
      $sum += $i;
    }
    echo " = {$sum}";
  }
  getSum();
?>