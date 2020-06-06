<?php
  function showheightnweight() {
    echo "何cmから：";
    $from = trim(fgets(STDIN));
    echo "何cmまで：";
    $til = trim(fgets(STDIN));
    echo "何cmごと：";
    $each = trim(fgets(STDIN));
    echo "身長 標準体重\n";
    echo "-------------\n";
    for ($i = $from; $i <= $til; $i += $each) {
      $stdwei = ($i - 100) * 0.9;
      echo "{$i}  {$stdwei}\n";
    }
  }
  showheightnweight();
?>