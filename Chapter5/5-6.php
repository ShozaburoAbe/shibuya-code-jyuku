<?php
  function sumaver() {
    echo "整数値xとyとzの平均値を求めます。\n";
    echo "xの値：";
    $x = trim(fgets(STDIN));
    echo "yの値：";
    $y = trim(fgets(STDIN));
    echo "zの値：";
    $z = trim(fgets(STDIN));
    $sum = $x + $y + $z;
    $aver = (float) $sum / 3;
    echo "xとyとzの平均値は{$aver}です。";
  }
  sumaver();
?>