<?php
  function linerSearch() {
    echo "要素数:";
    $n = trim(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
      echo "x[$i]：";
      $num[$i] = trim(fgets(STDIN));
    }
    echo "探す値：";
    $prop = trim(fgets(STDIN));
    $foundIndex = array_search($prop, $num);
    if (!$foundIndex == null) {
      echo "その値はx[{$foundIndex}]にあります。";
    } else {
      echo "その値はありません。";
    }
  }
  linerSearch();

  function linerSearchR() {
    echo "要素数：";
    $n = trim(fgets(STDIN));
    for ($i = 0; $i < $n; $i++) {
      echo "x[$i]：";
      $num[$i] = trim(fgets(STDIN));
    }
    echo "探す値：";
    $prop = trim(fgets(STDIN));
    $reversed = array_reverse($num, true);
    $foundIndex = array_search($prop, $reversed);
    if (!$foundIndex == null) {
      echo "その値はx[{$foundIndex}]にあります。";
    } else {
      echo "その値はありません。";
    }
  }
  linerSearchR();
?>