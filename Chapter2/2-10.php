<?php
  echo "球の表面積と体積を求めます。\n";
  echo "半径：";
  $stdin = trim(fgets(STDIN));
  echo "表面積は".(4 * 3.14 * pow($stdin, 2))."です。\n";
  echo "体積は".(4/3 * 3.14 * pow($stdin, 3))."です。";
?>