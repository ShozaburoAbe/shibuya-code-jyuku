<?php
  // function getMidVal ($n1, $n2, $n3) {
  //   if ($n1 >= $n2 && $n1 <= $n3 || $n1 <= $n2 && $n1 >= $n3) {
  //     $midnum = $n1;
  //   } elseif($n2 >= $n1 && $n2 <= $n3 || $n2 <= $n1 && $n2 >= $n3) {
  //     $midnum = $n2;
  //   } else{
  //     $midnum = $n3;
  //   }
  //   echo "中央値は{$midnum}です。";
  // }

  // echo "整数a：";
  // $stdina = trim(fgets(STDIN));
  // echo "整数b：";
  // $stdinb = trim(fgets(STDIN));
  // echo "整数c：";
  // $stdinc = trim(fgets(STDIN));
  // getMidVal($stdina, $stdinb, $stdinc);
  
  function getMidVal (...$nums) {
    sort($nums);
    // $midnum = $nums[1];  <-This is fine with this nums tho
    $midindex = floor((count($nums)) / 2);
    $midnum = $nums[$midindex];
    echo "中央値は{$midnum}です。";
  }

  echo "整数a：";
  $stdina = trim(fgets(STDIN));
  echo "整数b：";
  $stdinb = trim(fgets(STDIN));
  echo "整数c：";
  $stdinc = trim(fgets(STDIN));
  getMidVal($stdina, $stdinb, $stdinc);
?>