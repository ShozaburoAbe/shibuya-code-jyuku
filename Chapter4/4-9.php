<?php
  function outputdigit($n) {
    $digit = strlen($n);
    echo "その数は{$digit}桁です。";
  }
  echo "正の整数値の桁数を求めます。\n";
  echo "正の整数値：";
  $stdin = trim(fgets(STDIN));
  outputdigit($stdin);
  ?>