<?php
  function sumNums() {
    echo "整数を加算します。\n";
    $sum;
    for ($i = 1; $i <= 10; $i++) {
      echo "■第{$i}グループ\n";
      for ($j = 1; $j <= 5; $j++) {
        echo "整数：";
        $num = trim(fgets(STDIN));
        if ($num == 88888) break;
        if ($num == 99999) break 2;
        $sum += $num;
      }
    }
    echo "\n合計は{$sum}です。\n";
  }
  sumNums()
?>