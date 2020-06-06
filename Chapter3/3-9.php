<?php
  echo "整数値：";
  $stdin = fgets(STDIN);

  if ($stdin < 0) {
    echo "正ではない値が入力されました。";
  } elseif ($stdin % 10 == 0) {
    echo "その値は10の倍数です。";
  } else {
    echo "その値は10の倍数ではありません。";
  }
?>