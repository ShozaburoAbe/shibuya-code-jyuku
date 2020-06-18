<?php
  function showStr() {
    echo "文字列の個数：";
    $num = trim(fgets(STDIN));
    for ($i = 0; $i < $num; $i++) {
      echo "sx[{$i}] = ";
      $pro[$i] = trim(fgets(STDIN));
    }
    foreach ($pro as $str) {
      echo $str . PHP_EOL;
    }
  }
  showStr();
?>