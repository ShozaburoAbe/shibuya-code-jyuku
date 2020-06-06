<?php

  function count2zero() {
    echo "カウントダウンします。\n";
    do {
      echo "正の整数値：";
      $stdin = trim(fgets(STDIN));
    } while ($stdin <= 0);

    while($stdin >= 0) {
      echo --$stdin."\n";
    }
    echo "xの値は{$stdin}になりました。";
  }
  count2zero();
?>