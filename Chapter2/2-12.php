<?php
  echo "整数値：";
  $stdin = trim(fgets(STDIN));
  echo "その値の+-5の乱数を生成しました。\n";
  echo "値は".($stdin + rand(-5, 5))."です。";
?>