<?php
  // function getBnSnum($n1, $n2) {
  //   if ($n1 == $n2) {
  //     echo "2つの値は同じです。";
  //   } else {
  //     if ($n1 < $n2) {
  //       echo "小さい方の値は{$n1}です。\n";
  //       echo "大きい方の値は{$n2}です。"; 
  //     } else {
  //       echo "小さい方の値は{$n2}です。\n";
  //       echo "大きい方の値は{$n1}です。"; 
  //     }
  //   }
  // }

  // echo "整数a：";
  // $stdina = trim(fgets(STDIN));
  // echo "整数b：";
  // $stdinb = trim(fgets(STDIN));
  // getBnSnum($stdina, $stdinb);

  function printBnSnum($n1, $n2) {
    if ($n1 == $n2) {
      echo "2つの値は同じです。";
    } else {
      ($n1 < $n2) ? $s = $n1 : $b = $n1;
      ($n2 < $n1) ? $s = $n2 : $b = $n2;
      echo "小さい方の値は{$s}です。\n";
      echo "大きい方の値は{$b}です。"; 
    }
  }

  echo "整数a：";
  $stdina = trim(fgets(STDIN));
  echo "整数b：";
  $stdinb = trim(fgets(STDIN));
  printBnSnum($stdina, $stdinb);
?>