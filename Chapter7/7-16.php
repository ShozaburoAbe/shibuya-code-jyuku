<?php
  function minOf() {
    echo "人数は：";
    $num = trim(fgets(STDIN));
    echo "{$num}人の身長と体重を入力せよ。\n";
    for ($i = 1; $i <= $num; $i++) {
      echo "{$i}番目の身長：";
      $height[$i] = trim(fgets(STDIN));
      echo "{$i}番目の体重：";
      $weight[$i] = trim(fgets(STDIN));
    }
    $shortest = min($height);
    $lightsest = min($weight);
    echo "最も背が低い人の身長：{$shortest}\n";
    echo "最も痩せている人の体重：{$lightsest}";
  }
  minOf();
?>