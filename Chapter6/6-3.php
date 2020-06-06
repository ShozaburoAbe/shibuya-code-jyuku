<?php
  function show() {
    for ($i = 0; $i < 5; $i++) {
      (double) $a[$i] = ($i + 1) * 1.1;
    }
    for ($i = 0; $i < 5; $i++) {
      echo "a[{$i}] = $a[$i]\n";
    }
  }
  show();
  ?>