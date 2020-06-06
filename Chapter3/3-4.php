<?php
  echo "変数A：";
  $stdinA = fgets(STDIN);
  echo "変数B：";
  $stdinB = fgets(STDIN);
  $r = !($stdinA % $stdinB == 0) ? "BはAの約数ではありません。" : "BはAの約数です。";
  echo $r;
?>