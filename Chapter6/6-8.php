<?php
  // function queryNum() {
  //   echo "要素数：";
  //   $count = trim(fgets(STDIN));
  //   $a = [];
  //   for ($i = 0; $i < $count; $i++) {
  //     echo "a[{$i}] = ";
  //     $n = trim(fgets(STDIN));
  //     array_push($a, $n);
  //   }
  //   echo "探す値：";
  //   $findN = trim(fgets(STDIN));
  //   $index = array_search($findN, $a);
  //   if (in_array($findN, $a)) {
  //     echo "それはa[{$index}]にあります。";
  //   } else {
  //     echo "それはありません。";
  //   }
  // }
  // queryNum();

  function queryNumFromLast() {
    echo "要素数：";
    $count = trim(fgets(STDIN));
    $a = [];
    for ($i = 0; $i < $count; $i++) {
      echo "a[{$i}] = ";
      $n = trim(fgets(STDIN));
      array_push($a, $n);
    }
    echo "探す値：";
    $findN = trim(fgets(STDIN));
    for ($i = count($a); $i > 0; $i--) {
      if ($a[$i] == $findN) {
        echo "それはa[{$i}]にあります。";
        break;
      }
    }
    if (!(in_array($findN, $a))) {
      echo "それはありません。";
    }
  }
  queryNumFromLast();

?>