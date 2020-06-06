<?php
  function getSumAver() {
    echo "整数を加算します。\n何個加算しますか：";
    $quantity = trim(fgets(STDIN));
    $nums = array();
    for ($i = 1; $i <= $quantity; $i++) {
      echo "整数（0で終了）：";
      $num = trim(fgets(STDIN));
      if ($num == 0) break;
      array_push($nums, $num);
      if (array_sum($nums) > 1000) {
        echo "合計が1000を超えました。\n";
        echo "最後の数値は無視します。\n";
        array_splice($nums, -1);
        break;
      }
    }
    $sum = array_sum($nums);
    $aver = floor($sum / count($nums));
    echo "合計は{$sum}です。\n";
    echo "平均は{$aver}です。";
  }
  getSumAver();
?>