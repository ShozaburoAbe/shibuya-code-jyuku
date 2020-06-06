<?php
  function getDif($n1, $n2) {
    $dif = abs($n1 - $n2);
    $r = ($dif <= 10) ? "10以下です。" : "11以上です。";
    echo "それらの差は{$r}";
  }
  echo "整数a；";
  $stdin1 = trim(fgets(STDIN));
  echo "整数b：";
  $stdin2 = trim(fgets(STDIN));
  getDif($stdin1, $stdin2);
?>