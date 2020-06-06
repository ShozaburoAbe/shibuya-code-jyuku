<?php
  function getBiggerNum($n1, $n2) {
    $biggerN = ($n1 > $n2) ? $n1 : $n2;
    echo "大きいほうの値は{$biggerN}です。";
  }
  echo "実数a：";
  $stdinN1 = trim(fgets(STDIN));
  echo "実数b：";
  $stdinN2 = trim(fgets(STDIN));
  getBiggerNum($stdinN1, $stdinN2);
?>