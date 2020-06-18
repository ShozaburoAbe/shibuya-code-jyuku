<?php
  $num1 = $argv[1];
  $num2 = $argv[2];
  for ($i = 0, $j = 1; $i < count($argv) - 1; $i++, $j++ ) {
    echo "args[$i] = $argv[$j]" . PHP_EOL;
  }
?>