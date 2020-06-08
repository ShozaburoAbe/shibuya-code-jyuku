<?php
  function getAvers() {
    echo "6人の国語•数学の点数を入力せよ。\n";
    for ($i = 1; $i <= 6; $i++) {
      echo "{$i}番…国語：";
      $jap = trim(fgets(STDIN));
      $japPoints[$i] = $jap; 
      echo " 　…数学：";
      $math = trim(fgets(STDIN));
      $mathPoints[$i] = $math;
    }
    echo "No.  国語  数学  平均\n";
    for ($i = 1; $i <= 6; $i++) {
      $PersAver = ($japPoints[$i] + $mathPoints[$i]) / 2;
      echo " {$i}    {$japPoints[$i]}    {$mathPoints[$i]}    {$PersAver}\n";
    }
    for ($i = 1; $i <= 6; $i++) {
      $JapTotal += $japPoints[$i];
      $MathTotal +=  $mathPoints[$i];
    }
    $japAver = $JapTotal / 6;
    $mathAver = $MathTotal / 6;
    echo "平均   {$japAver}   {$mathAver}";
  }
  getAvers();
?>