<?php
  function sumaver() {
    echo "整数値xとyとzの平均値を求めます。\n";
    echo "xの値：";
    $x = (int) trim(fgets(STDIN));
    echo "yの値：";
    $y = (int) trim(fgets(STDIN));
    echo "zの値：";
    $z = (int) trim(fgets(STDIN));
    $sum = $x + $y + $z;
    $aver = ($sum / 3);
    echo "xとyとzの平均値は{$aver}";
  }
  sumaver();
?>