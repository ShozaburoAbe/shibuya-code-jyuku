<?php
  function showArray() {
    for ($i = 0,  $n = 5; $i < 5; $i++, $n--) {
      echo "a[$i] = $n\n";
    }
  }
  showArray();

  function ShowNums()  {
    $a = [];
    for ($i =0; $i < 5; $i++) {
      $a[$i] = 5 - $i;
    }
    for ($i = 0; $i < 5; $i++) {
      echo "a[{$i}] = {$a[$i]}\n";
    }
  }
  ShowNums();
?>