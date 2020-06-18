<?php
  function Compare() {
    echo "文字列s1：";
    $s1 = trim(fgets(STDIN));
    echo "文字列s2：";
    $s2 = trim(fgets(STDIN));
    $r = strcasecmp($s1, $s2);
    if ($r < 0) {
      echo "s1の方が小さい。";
    } elseif ($r > 0) {
      echo "s2の方が小さい。";
    } else {
      echo "s1とs2は等しい。";
    }
  }
  Compare();
?>