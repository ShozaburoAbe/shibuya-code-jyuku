<?php
  echo "整数値：";
  $stdin = fgets(STDIN);
  
  if ($stdin < 0) {
    echo "正でない数値が入力されました。";
  } elseif ($stdin % 3 == 0) {
    echo "その値は３で割り切れます。";
  } else {
    if ($stdin % 3 == 1) {
      echo "その値を３で割った余りは１です。";
    } else {
      echo "その値を３で割った余りは２です。";
    }
  }
?>