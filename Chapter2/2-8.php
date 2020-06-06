<?php
  echo "xの値：";
  $xstdin = trim(fgets(STDIN));
  echo "yの値：";
  $ystdin = trim(fgets(STDIN));
  echo "合計は" .($xstdin + $ystdin). "です。\n";
  echo "平均は" .(($xstdin + $ystdin)/2). "です。";
?>