<?php
  function printDouble() {
    echo "実数値：";
    $x = trim(fgets(STDIN));
    echo "表示桁数：";
    $p = trim(fgets(STDIN));
    echo "少数部桁数：";
    $w = trim(fgets(STDIN));
    $rx = round($x, $w);
    echo "  " . $rx;
  }
  printDouble();
?>