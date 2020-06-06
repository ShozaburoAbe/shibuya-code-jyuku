<?php
  echo "整数値：";
  $stdin = (int)trim(fgets(STDIN));
  // echo var_dump($stdin);
  print "10を加えた値は". ($stdin + 10) ."です。\n";
  print "10を減じた値は". ($stdin - 10) ."です。";
?>