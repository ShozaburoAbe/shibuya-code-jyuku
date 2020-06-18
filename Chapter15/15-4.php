<?php
  echo "文字列：";
  $stdin = trim(fgets(STDIN));
  $rstdin = strrev($stdin);
  echo "逆から読むと{$rstdin}です。";
?>