<?php

function aryRmv($num, $index) {
  unset($num[$index]);
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
  echo "削除する要素のインデックス：";
  $index = trim(fgets(STDIN));
  aryRmv($num, $index);
}
input2Array();
?>