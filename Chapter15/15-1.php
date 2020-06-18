<?php
  function printUni() {
    for ($i = 0x21; $i <= 0x7E; $i++) {
      echo mb_chr($i) . " " . sprintf("%04d", $i) . PHP_EOL;
    }
  }
  printUni();
?>