<?php
  echo "整数値：";
  $stdin = trim(fgets(STDIN));
  echo "最下位桁を除いた値は".substr($stdin, 0, (strlen($stdin) -1))."\n";
  echo "最下位桁は".substr($stdin, -1)."です。";
?>