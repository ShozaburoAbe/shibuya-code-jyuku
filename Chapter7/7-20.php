<?php

  function aryIns ($num, $Index, $property) {
    array_splice($num, $Index, 0, $property);
    foreach($num as $key => $n) {
      echo "a[$key] = {$n}\n";
    }
  }

  function input2Array() {
  echo "要素数:";
  $n = trim(fgets(STDIN));
  for ($i = 0; $i < $n; $i++) {
    echo "x[$i]：";
    $num[$i] = trim(fgets(STDIN));
  }
  echo "挿入する要素のインデックス：";
  $Index = trim(fgets(STDIN));
  echo "挿入する値：";
  $property = trim(fgets(STDIN));
  aryIns ($num, $Index, $property);
}
input2Array();
?>