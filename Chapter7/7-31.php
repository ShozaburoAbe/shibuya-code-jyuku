<?php
  class getAbsNum {

    private function getInt() {
      echo "int   型の整数aの値：";
      $intN = (int) trim(fgets(STDIN));
      return $intN;
    }

    protected function getLong() {
      echo "long  型の整数bの値：";
      $longN = trim(fgets(STDIN));
      return $longN;
    }

    function getFloat() {
      echo "float 型の整数cの値：";
      $floatN = (float) trim(fgets(STDIN));
      return $floatN;
    }

    public function getDouble() {
      echo "double型の整数dの値：";
      $doubleN = (double) trim(fgets(STDIN));
      return $doubleN;
    }

    function convert2absolute(...$nums) {
      foreach($nums as $key => $num) {
        $absNum[$key] = abs($num);
      }
      for ($i = 0, $a = "a"; $i < count($absNum); $i++, $a++) {
        echo "{$a}の絶対値は{$absNum[$i]}です。\n";
      }
    }

    public function getHandler() {
      $intN = $this->getInt();
      $longN = $this->getLong();
      $floatN = $this->getFloat();
      $doubleN = $this->getDouble();
      $this->convert2absolute($intN, $longN, $floatN, $doubleN);
    }
  }
  $inst = new getAbsNum;
  $inst->getHandler();

?>