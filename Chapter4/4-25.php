<?php
  function primeNum() {
    do {
      echo "2以上の整数値：";
      $stdin = trim(fgets(STDIN));
    } while ($stdin < 2);
    
    for ($i = 2; $i < $stdin; $i++) {
      if ($stdin % $i == 0) {
        break;
      } 
    }
    if ($i == $stdin) {
      echo "それは素数です。";
    } else {
      echo "それは素数ではありません。";
    }
  }
  primeNum();
?>
