<?php
  function productNums($n) {
      $product = 1;
    for ($i = 1;; $i++) {
      $product *= $i;
      if ($i == $n) break;
    }
    echo "1から{$n}までの積は{$product}です。";
  }
  echo "正の整数値：";
  $stdin = trim(fgets(STDIN));
  productNums($stdin);
?>