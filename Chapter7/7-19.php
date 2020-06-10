<?php
  function aryRmvN($num, $stIndex, $quantiIndex) {
    $removedNum = array_slice($num, $stIndex, $quantiIndex);
    foreach($removedNum as $key => $n) {
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
  echo "削除する開始のインデックス：";
  $stIndex = trim(fgets(STDIN));
  echo "削除する要素の個数：";
  $quantiIndex = trim(fgets(STDIN));
  aryRmvN($num, $stIndex, $quantiIndex);
}
input2Array();
?>