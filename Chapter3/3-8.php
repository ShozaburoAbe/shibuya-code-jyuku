<?php
  echo "整数値：";
  $stdin = fgets(STDIN);
  $possibe = ($stdin % 5 == 0) ? "割り切れます。" : "割り切れません。";
  echo "その値は５で".$possibe;
?>