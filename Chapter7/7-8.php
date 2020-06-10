<?php
  function randNum() {
    echo "乱数を生成します。\n";
    echo "下限値：";
    $min = trim(fgets(STDIN));
    echo "上限値：";
    $max = trim(fgets(STDIN));
    $randNum = rand($min, $max);
    echo "生成した乱数は{$randNum}です。";
  }
  randNum();
?>