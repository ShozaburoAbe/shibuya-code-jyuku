<?php
  function showRandNum() {
    echo "要素数：";
    $num = trim(fgets(STDIN));
    for ($i = 0; $i < $num; $i++) {
      $n = rand(1, 10);
      echo "a[{$i}] = {$n}\n";
    }
  }
  showRandNum();
?>