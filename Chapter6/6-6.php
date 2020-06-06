<?php
  class outputArray {

    function showArray($a) {
      list($a0, $a1, $a2) = $a;
      echo "[{$a0}, {$a1}, {$a2}]";
    }

    function getmakeArray($elem) {
      $a = [];
      for ($i = 0; $i < $elem; $i++) {
        echo "a[{$i}] = ";
        $num = trim(fgets(STDIN));
        array_push($a, $num);
      }
      return $a;
    }

    function getElem() {
      echo "要素数：";
      $elem = trim(fgets(STDIN));
      return $elem;
    }

    function perform() {
      $elem = $this->getElem();
      $a = $this->getmakeArray($elem);
      $this->showArray($a);
    }
  }

  $inst = new outputArray;
  $inst->perform();

?>