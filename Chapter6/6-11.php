<?php
  class showRandNum {

    function printArrays($a) {
      foreach($a as $key => $n) {
        echo "a[{$key}] = $n\n";
      }
    }

    function makeArray($num) {
      $a[0] = rand(1, 10);
      for ($i = 1; $i < $num; $i++){
        do {
          $randNum = rand(1, 10);
          $a[$i] = $randNum;
        } while (!in_array($a[$i], $a, true));
      }
      return $a;
    }

    function getNum() {
      echo "要素数：";
      $num = trim(fgets(STDIN));
      return $num;
    }

    function showNumHandler() {
      $num = $this->getNum();
      $a = $this->makeArray($num);
      $this->printArrays($a);
    }
  }
  $instant = new showRandNum;
  $instant->showNumHandler();
?>