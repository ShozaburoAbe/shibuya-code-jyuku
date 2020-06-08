<?php
  function reversedsort() {
    echo "要素数：";
    $elem = trim(fgets(STDIN));
    $a = [];
    for ($i = 0; $i < $elem; $i++) {
      echo "a[{$i}] = ";
      $num = trim(fgets(STDIN));
      $a[$i] = $num;
    }
    rsort($a);
    echo "aの全要素を逆順にbにコピーしました。\n";
    for ($i = 0; $i < $elem; $i++) {
      echo "b[{$i}] = $a[$i]\n";
    }
  }
  reversedsort();
?>