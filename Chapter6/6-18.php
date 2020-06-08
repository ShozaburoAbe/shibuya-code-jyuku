<?php
  class showArrayofNumbers {
    
    public function showNums() {
      echo "行列aの要素の値を入力せよ。\n";
      for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 3; $j++) {
          echo "a[{$i}][{$j}]：";
          $numA = trim(fgets(STDIN));
          $a[$i][$j] = $numA;
        }
      }
      echo "行列bの要素の値を入力せよ。\n";
      for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 4; $j++) {
          echo "b[{$i}][{$j}]：";
          $numB = trim(fgets(STDIN));
          $b[$i][$j] = $numB;
        }
      }
      echo "行列aとbの積\n";
      for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4;  $j++) {
          for ($k = 0; $k < 3; $k++) {
            $c[$i][$j] += $a[$i][$k] * $b[$k][$j];
          }
          echo $c[$i][$j] . "  ";
        }
        echo "\n";
      }
    }


  }

  $inst = new showArrayofNumbers;
  $inst->showNums();
?>