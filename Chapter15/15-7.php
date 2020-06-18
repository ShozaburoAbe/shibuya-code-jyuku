<?php
  function equal() {
    echo "文字列s1：";
    $s1 = trim(fgets(STDIN));
    echo "文字列s2：";
    $s2 = trim(fgets(STDIN));
    $r = strcasecmp($s1, $s2);
    if ($s1 == $s2) {
      echo "s1 == s2です。\n";
    } else {
      echo "s1 != s2です。\n";
    }
    if ($r == 0) {
      echo "s1とs2の中身は等しい。";
    } else {
      echo "s1とs2の中身は等しくない。";
    }
  }
  equal();
?>