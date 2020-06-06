<?php
  function calucNum($x, $y, $z) {
    print "xの値は".$x."です。" .PHP_EOL."yの値は".$y."です。" .PHP_EOL."zの値は".$z."です。" .PHP_EOL;
    print "合計は".($x+$y+$z)."です。"."\n"."平均は".(floor(($x+$y+$z)/3))."です。";
  }
  calucNum(63, 18, 52);

  // function calculateNumber(...$nums) {
  //   $r;
  //   foreach($nums as $num) {
  //     $r += $num;
  //   }
  //   print "合計は".$r.PHP_EOL;
  //   $numlen = count($nums);
  //   print "平均は".($r / $numlen);
  // }
  // calculateNumber(1,2,3,4,5,6,7,8,9,10);
?>