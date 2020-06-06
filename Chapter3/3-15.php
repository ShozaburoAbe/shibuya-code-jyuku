<?php
  // function getSmNum($n1, $n2, $n3) {
  //   if ($n1 < $n2 && $n1 < $n3) {
  //     echo "最小値は{$n1}です。";
  //   } elseif ($n2 < $n1 && $n2 < $n3) {
  //     echo "最小値は{$n2}です。";
  //   } else {
  //     echo "最小値は{$n3}です。";
  //   }
  // }

  // echo "整数a：";
  // $stdina = trim(fgets(STDIN));
  // echo "整数b：";
  // $stdinb = trim(fgets(STDIN));
  // echo "整数c：";
  // $stdinc = trim(fgets(STDIN));
  // getSmNum($stdina, $stdinb, $stdinc);


  function getSmNum (...$numbers) {
    $minnum = min($numbers);
    echo "最小値は{$minnum}です。";
  }

  echo "整数a：";
  $stdina = trim(fgets(STDIN));
  echo "整数b：";
  $stdinb = trim(fgets(STDIN));
  echo "整数c：";
  $stdinc = trim(fgets(STDIN));
  getSmNum($stdina, $stdinb, $stdinc);
?>