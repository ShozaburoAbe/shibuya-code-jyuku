<?php
  class CalcNums {

    private function min($x, $y) {
      $min = ($x > $y) ? $y : $x;
      echo "x, yの最小値は{$min}です。\n";
    }

    protected function min2(...$min) {
      $minN = min($min);
      echo "x, y, zの最小値は{$minN}です。\n";
    }

    private function min3($a) {
      $minN = min($a);
      echo "配列aの最小値は{$minN}です。";
    }

    public function getNumHandler() {
      echo "xの値：";
      $x = trim(fgets(STDIN));
      echo "yの値：";
      $y = trim(fgets(STDIN));
      echo "zの値：";
      $z = trim(fgets(STDIN));
      echo "配列aの要素数：";
      $n = trim(fgets(STDIN));
      for ($i = 0; $i < $n; $i++) {
        echo "a[$i] = ";
        $prop = trim(fgets(STDIN));
        $a[$i] = $prop;
      }
      $this->min($x, $y);
      $this->min2($x, $y, $z);
      $this->min3($a);
    } 

  }
  $inst = new CalcNums;
  $inst->getNumHandler();
?>