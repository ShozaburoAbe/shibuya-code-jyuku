<?php
  function readPlusInt() {
    do {
      echo "正の整数：";
      $num = trim(fgets(STDIN));
    } while ($num <= 0);
    $revNum = strrev($num);
    echo "逆から読むと{$revNum}です。\n";
    echo "もう一度？<Yes...1／No...2>：";
    $again = trim(fgets(STDIN));
    $again == 1 && readPlusInt();
  }
  readPlusInt();
?>