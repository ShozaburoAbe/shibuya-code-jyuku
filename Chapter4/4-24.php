<?php
  function numberPyramid() {
    echo "数字ピラミッドを\n表示します。\n段数は：";
    $stdin = trim(fgets(STDIN));
    for ($i = 1; $i <= $stdin; $i++) {
      for($j = 1; $j <= $stdin - $i; $j++) {
        echo " ";
      }
      for ($k = 1; $k <= $i * 2 - 1; $k++) {
        echo $i % 10;
      }
      echo "\n";
    }
  }
  numberPyramid();
?>