<?php
  echo "整数値：";
  $stdin = fgets(STDIN);
  $check = ($stdin < 0) ? "その値は負です。" : "";
  echo $check;
?>