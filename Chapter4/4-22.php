<?php
  function createUpperTriangle() {
    echo "左下直角の二等辺三角形を表示します。\n段数は：";
    $stdin = trim(fgets(STDIN));
    $quantity;
    for ($i = 1; $i <= $stdin; $i++) {
      for($j = 1; $j <= $i; $j++) {
        echo "*";
      }
      echo "\n";
    }
  }
  createUpperTriangle();

  function createDownTriangle() {
    echo "左上直角の二等辺三角形を表示します。\n段数は：";
    $stdin = trim(fgets(STDIN));
    for ($i = 1; $i <= $stdin; $i++) {
      for($j = $stdin; $j >= $i; $j--) {
        echo "*";
      }
      echo "\n";
    }
  }
  createDownTriangle();
?>