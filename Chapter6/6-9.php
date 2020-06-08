<?php
  function getSumNum() {
    echo "変数値：";
    $num = trim(fgets(STDIN));
    $a = [];
    for ($i = 0; $i < $num; $i++) {
      echo "a[{$i}] = ";
      $n = trim(fgets(STDIN));
      array_push($a, $n);
    }
    $sum = array_sum($a);
    $aver = (float)$sum / count($a);
    echo "全要素の合計は{$sum}です。";
    echo "全要素の平均は{$aver}です。";
  }
  getSumNum();
?>