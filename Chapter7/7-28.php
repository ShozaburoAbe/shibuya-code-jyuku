<?php

  function makeArray($row, $column) {
    for ($i = 0; $i < $row; $i++) {
      for ($j = 0; $j < $column; $j++) {
        echo "a[$i][$j]：";
        $prop = trim(fgets(STDIN));
        $a[$i][$j] = $prop;
      }
    }
    for ($i = 0; $i < $row; $i++) {
      for ($j = 0; $j < $column; $j++) {
        echo "b[$i][$j]：";
        $prop = trim(fgets(STDIN));
        $b[$i][$j] = $prop;
      }
    }
    echo "行列a\n";
    for ($i = 0; $i < $row; $i++) {
      for ($j = 0; $j < $column; $j++) {
        echo $a[$i][$j]. "  ";
      }
      echo "\n";
    }
    echo "\n";

    echo "行列b\n";
    for ($i = 0; $i < $row; $i++) {
      for ($j = 0; $j < $column; $j++) {
        echo $b[$i][$j]. "  ";
      }
      echo "\n";
    }
    echo "\n";
    
    echo "行列c\n";
    for ($i = 0; $i < $row; $i++) {
      for ($j = 0; $j < $column; $j++) {
        $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
        echo $c[$i][$j]. "  ";
      }
      echo "\n";
    }
  }

  function getRowNum() {
    echo "行列の行数：";
    $row = trim(fgets(STDIN));
    echo "行列の列数：";
    $column = trim(fgets(STDIN));
    makeArray($row, $column);
  }
  getRowNum();
?>