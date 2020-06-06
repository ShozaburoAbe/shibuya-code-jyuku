<?php
  function outputNum() {
    $a = [5, 4, 3, 2, 1];

    for ($i = 0; $i < count($a); $i++) {
      echo "a[{$i}] = $a[$i]\n";
    }

  }
  outputNum();
?>