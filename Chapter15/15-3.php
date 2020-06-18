<?php
  
  $s1 = null;
  $s2 = "";
  $s3 = "ABC";
  $s4 = "ABC";
  $s5 = "ABC";
  $s5 = "XYZ";

  echo "文字列s1 = " . $s1 ."\n";
  echo "文字列s2 = " . $s2 ."\n";
  echo "文字列s3 = " . $s3 ."\n";
  echo "文字列s4 = " . $s4 ."\n";
  echo "文字列s5 = " . $s5 ."\n";
  echo "s3とs4は同じ文字リテラルを参照"; echo ($s3 === $s4) ? "している。" : "していない。";
?>