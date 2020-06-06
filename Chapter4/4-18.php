<?php
  function getDivisor() {
    echo "整数値：";
    $stdin = trim(fgets(STDIN));
    $count;
    for ($i = 1; $i <= $stdin; $i++) {
      if($stdin % $i == 0) {
        echo $i ." ";
        $count++;
      }
    }
  }
  getDivisor();
?>