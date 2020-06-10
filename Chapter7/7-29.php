<?php

  function aryClone2($a, $row, $column) {
    echo "行列aの複製\n";
    for ($i = 0; $i < $row; $i++) {
      for ($j = 0; $j < $column; $j++) {
        echo $a[$i][$j] . "  ";
      }
      echo "\n";
    }
  }

  function getInputs() {
    echo "行列の行数：";
    $row = trim(fgets(STDIN));
    echo "行列の列数：";
    $column = trim(fgets(STDIN));
    for ($i = 0; $i < $row; $i++) {
      for ($j = 0; $j < $column; $j++) {
        echo "a[$i][$j]：";
        $prop = trim(fgets(STDIN));
        $a[$i][$j] = $prop;
      }
    }
    echo "行列a\n";
    for ($i = 0; $i < $row; $i++) {
      for ($j = 0; $j < $column; $j++) {
        echo $a[$i][$j] . "  ";
      }
      echo "\n";
    }
    aryClone2($a, $row, $column);
  }
  getInputs();
?>