<?php
  echo "三角形の面積を求めます。\n";
  echo "底辺：";
  $stdinw = trim(fgets(STDIN));
  echo "高さ：";
  $stdinh = trim(fgets(STDIN));
  echo "面積は".($stdinw * $stdinh / 2)."です。";
?>